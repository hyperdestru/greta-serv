function toEur(n) {
	let eur;
	if (!isNaN(n) && n !== undefined) {
		let frc = parseFloat(n);
		eur = frc / 6.55957;
	} else {
		eur = "Entrée non valide";
	}

	return eur;
}

function toFrc(n) {
	let frc;
	if (!isNaN(n) && n !== undefined) {
		let eur = parseFloat(n);
		frc = eur * 6.55957;
	} else {
		frc = "Entrée non valide";
	}

	return frc;
}

function flush(elements) {
	for (let el of elements) {
		el.value = "";
	}
}

let eurInput = document.getElementById('euro-input');
let frcInput = document.getElementById('franc-input');
let button = document.getElementById('convert');

flush([eurInput, frcInput]);

button.addEventListener('click', function() {
	if (eurInput.value === "" && frcInput.value !== "") {
		eurInput.value = toEur(frcInput.value);
	} else if (eurInput.value !== "" && frcInput.value === "") {
		frcInput.value = toFrc(eurInput.value);
	}
});