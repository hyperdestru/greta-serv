'use strict'

let l_prix = []
let input_price = 1
let billets = []
billets[1] = 0
billets[5] = 0
billets[10] = 0

while (input_price != 0) {
	input_price = parseInt(prompt("Prix de l'article :"))

	if (input_price != 0 && !isNaN(input_price)) {

		l_prix.push(input_price)
		console.log(input_price + " mis dans la table.")
	}
}

let total_price = 0
for (let i = 0; i < l_prix.length; i++) {
	total_price += parseInt(l_prix[i])
}

console.log("Total des courses : " + total_price)

let pay, give_back

if (total_price > 0) {
	pay = prompt("Combien tu donnes : ")
} else {
	console.log("Rien a payer")
}

if (pay > total_price) {
	give_back = pay - total_price
	console.log("Je te rends " + give_back)
}

while (give_back >= 10) {
	give_back -= 10
	billets[10]++
}

while (give_back >= 5) {
	give_back -= 5
	billets[5]++
}

while (give_back >= 1) {
	give_back -= 1
	billets[1]++
}

console.log("Je te rends : " + billets[10] + " billets de 10")
console.log("Je te rends : " + billets[5] + " billets de 5")
console.log("Je te rends : " + billets[1] + " billets de 1")



