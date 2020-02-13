'use strict';

//Vide les valeurs des elements passés en argument
function flush(elements) {
	if (elements.length > 0) {
		for (let i = 0; i < elements.length; i++) {
			if (elements[i].value !== null) {
				elements[i].value = null;
			}
		}
	}
}

function Input(id, regex) {
	let input = document.getElementById(id);
	input.msg = document.getElementById(id + '-msg');
	input.regex = regex;
	input.validated = false;

	input.msg.style.display = 'none';
	input.msg.style.color = 'red';

	input.displayMsg = function() {
		input.msg.style.display = 'inline';
	}

	input.hideMsg = function() {
		input.msg.style.display = 'none';
	}

	input.test = function() {
		if (input.regex.test(input.value)) {

			input.validated = true;
			input.hideMsg();

			return true;

		} else {

			input.validated = false;
			input.displayMsg();

			return false;
		}		
	}
	return input;
}

//Recuperation/creation des objets inputs avec leurs regex
let username = Input('username', /.{2,}/);
let email = Input('email', /.+@.+\..+/);
let password = Input('password', /\d+[a-z]{4,}@|&|\$|!|%/);

//Recuperation du formulaire
let form = document.getElementById('signup-form');

form.inputs = [
	username,
	email,
	password
];

//On vide tous les inputs au chargement de la page
flush(form.inputs);

let validInputsCount = 0;
let totalInputs = form.inputs.length;

for (let input of form.inputs) {

	input.addEventListener('change', function(event) {

		event.target.test();

		if (event.target.test() === true) {

			if (validInputsCount < totalInputs) {
				validInputsCount++;
			}

		} else {

			if (validInputsCount > 0) {
				validInputsCount--;
			}
		}
	});
}

form.addEventListener('submit', function(e) {

	if (validInputsCount !== totalInputs) {

		e.preventDefault();
		console.log("Formulaire desactivé");

	}
});

