/*
Info : factoriel > ~170 retourne "infinity"
Ca doit depasser la capa max d'un entier en js
*/

function fac(n) {
	let r = 1

	if (n > 0 && !isNaN(n)) {
		for (let i = 1; i <= n; i++)
			r *= i
	} else
		console.log("Bad input. Only positive numbers allowed.")

	return r
}

/************************************************************/

let n
n = parseInt(prompt("Calculer le factoriel de :"))

while (n <= 0)
	n = prompt("Nombre invalide ! Calculer le factoriel de :")

alert("!" + n + " = " + fac(n))