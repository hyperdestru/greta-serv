/* Calcule la moyenne des valeurs d'un tableau. 
Retourne celle ci à la decimale prés (fournie en parametre) */

function my_average(p_array, p_dec) {
	let sum = 0
	let result = 0

	if (p_array.length > 0) {
		for (let i = 0; i < p_array.length; i++)
			sum += p_array[i]

		result = sum / p_array.length
	}

	return result.toFixed(p_dec)
}

/***************************************************************************/ 

let input = 0
let grades = []

while (!isNaN(input)) {
	input = parseInt(prompt("Entrez une note :"))

	if (!isNaN(input)) {
		grades.push(input)
		console.log(input + " mis dans la table")
	}
}

let average = my_average(grades, 2)
let count = 0

for (let i = 0; i < grades.length; i++) {
	if (grades[i] > average) 
		count++
}

console.log("Moyenne de la classe = " + average + " | Nombre de notes superieures moyenne = " + count)