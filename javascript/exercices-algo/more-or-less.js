let mystery_nb = Math.floor((Math.random() * 100) + 0)
let guess_nb = 0
let turns = 6
let moves_count = 0
let win = false

let msg_welcome = "Bienvenue dans le jeu du PLUS OU MOINS. Tu dois deviner un nombre entre 0 et 100. Tu as " + turns + " essais."
let msg_prompt = "Ta proposition : "
let msg_more = "C'est plus. "
let msg_less = "C'est moins. "
let msg_win = "Bravo c'est gagné ! "
let msg_lose = "Tu as perdu, plus d'essais. Le chiffre mystere etait "

console.log("For debug purpose : " + mystery_nb)

alert(msg_welcome)

while (turns > 0) {

	guess_nb = parseInt(prompt(msg_prompt))

	while (isNaN(guess_nb) || guess_nb < 0 || guess_nb > 100)
		guess_nb = parseInt(prompt(msg_prompt))

	if ((guess_nb > mystery_nb) || (guess_nb < mystery_nb)) {

		turns--
		moves_count++
		if (turns === 0) 
			break

		if (guess_nb > mystery_nb)
			console.log(msg_less + "Il te reste " + turns + " tour(s).")
		else
			console.log(msg_more + "Il te reste " + turns + " tour(s).")

	} else if (guess_nb === mystery_nb) {

		win = true
		moves_count++
		console.log(msg_win + "En " + moves_count + " essai(s).")

		break
	}
}

if (!win && turns === 0) 
	console.log(msg_lose + mystery_nb)

