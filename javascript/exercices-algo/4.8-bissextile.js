function is_bissextile(p_year) {
	let r
	if (p_year > 0 && !isNaN(p_year)) {

		if (p_year % 4 === 0) {

			if (p_year % 100 === 0) {

				if (p_year % 400 === 0)
					r = true
				else
					r = false

			} else
				r = true

		} else
			r = false
	}

	return r
}

/**************************************************************/

let day
let month
let year
let bissex

year = parseInt(prompt("Rentrez une année :"))

month = parseInt(prompt("Rentrez un mois :"))

while (month > 12 || month < 1)
	month = prompt("Mois invalide !\nRentrez un nouveau mois :")

day = parseInt(prompt("Rentrez un jour :"))

while ((day > 31 || day < 1) || 
	(month === 2 && is_bissextile(year) === false && day > 28) ||
	(month === 2 && day > 29)) {
	day = parseInt(prompt("Jour invalide !\nRentrez un nouveau jour :"))
}

alert("Date rentrée : " + day + "/" + month + "/" + year)

if (is_bissextile(year) === true)
	alert(year + " est une année bissextile.")
else
	alert(year + " n'est pas bissextile.")



