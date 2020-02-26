'use strict'

let filter = document.querySelector('#filter');
filter.addEventListener('change', function(e) {
	console.log(e.target.value);
});

let invitations = [
	{person: 'Horn', donation: 30, currency: '£'},
	{person: 'John', donation: 10, currency: '£'},
	{person: 'Mike', donation: 25, currency: '$'},
	{person: 'Polo', donation: 44, currency: '$'},
	{person: 'Jack', donation: 17, currency: '$'},
	{person: null, donation: 47, currency: '$'},
	{person: 'Clem', donation: 28, currency: '€'},
	{person: 'Loic', donation: 36, currency: '€'},
	{person: 'Gael', donation: 18, currency: '€'},
	{person: 'Jul', donation: 20, currency: '€'},
	{person: 'Lee', donation: 37, currency: '€'}
];

function refreshList(array) {
	let listeElem = document.querySelector('#liste');
	let tr;
	let tdNom;
	let tdParticipation;

	array.forEach(function(invitation) {

		tr = document.createElement('tr');
		tdNom = document.createElement('td');
		tdParticipation = document.createElement('td');

		if (invitation.person === null) {
			tdNom.innerText = "Name Missing";
			tdNom.style.color = 'red';
			tdNom.style.fontStyle = 'italic';
		} else {
			tdNom.innerText = invitation.person;
		}

		tdParticipation.innerText = invitation.donation + invitation.currency;

		tr.appendChild(tdNom);
		tr.appendChild(tdParticipation);
		listeElem.appendChild(tr);
	});
}

refreshList(invitations);


