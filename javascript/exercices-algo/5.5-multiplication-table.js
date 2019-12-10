let n = parseInt(prompt("Table de :"))
let max = parseInt(prompt("Jusqu'a : "))

let multiplication_table = (n, max) => {
	if (max <= 100) {
		for (let i = 0; i <= max; i++) {
			let r = n * i
			console.log(n + "*" + i + " = " + r)
		}
	} else {
		console.log("Limite max depassée, choisissez un nombre <= 100.")
	}

}

multiplication_table(n, max)