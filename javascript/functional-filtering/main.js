'use strict'

let users = [
	{name: 'Horn', score: 0},
	{name: 'John', score: 10},
	{name: 'Brad', score: 20},
	{name: 'Polo', score: 30},
	{name: 'Jack', score: 40},
	{name: null, score: 50},
	{name: 'Clem', score: 60},
	{name: 'Loic', score: 70},
	{name: 'Gael', score: 80},
	{name: 'Jul', score: 90},
	{name: 'Lee', score: 100}
];

let slider = document.getElementById("myRange");
let output = document.getElementById("rangeOutput");
let filterBtn = document.querySelector('#filterBtn');

function init() {
	slider.value = 50;
	output.innerText = slider.value;
	// De base au chargement on filtre sur rien
	filterList(users);
}

function purge(list) {
	while (list.firstChild) {
		list.removeChild(list.firstChild);
	}
}

function errorMsg(elt, text) {
	elt.innerText = text;
	elt.style.color = 'red';
	elt.style.fontStyle = 'italic';
}

function filterList(array, filterValue = null) {

	let listeElem = document.querySelector('#list');
	let tr;
	let tdName;
	let tdScore;

	purge(listeElem);

	array.forEach(function(elt) {
		if (elt.score > filterValue) {

			tr = document.createElement('tr');
			tdName = document.createElement('td');
			tdScore = document.createElement('td');

			tdScore.innerText = elt.score;

			if (elt.name != null) tdName.innerText = elt.name;
			else errorMsg(tdName, "Username Missing");

			tr.appendChild(tdName);
			tr.appendChild(tdScore);
			listeElem.appendChild(tr);
		}
	});
}

init();

slider.addEventListener('input', function(e) {
	output.innerText = e.target.value;
});

filterBtn.addEventListener('click', function(e) {
	filterList(users, slider.value);
});



