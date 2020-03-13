class Tools {

	/**
	 * Methode ajax classique pour charger un fichier
	 * @param filePath: string d'extension .txt
	 */
	static loadFile(filePath) {
		let rawFile = new XMLHttpRequest();
		let result;

		rawFile.onerror = function() {
			console.log("Impossible de charger le niveau");
		}

		rawFile.onreadystatechange = function() {
			if (rawFile.readyState === 4) {
				if (rawFile.status === 200 || rawFile.status === 0) {
					result = rawFile.responseText;
				}
			}
		}

		rawFile.open("GET", filePath, false);
		rawFile.send(null);

		return result;
	}

	/**
	 * Methode qui se charge de transformer du texte en tableau a 2 dimensions
	 * Utile pour l'affichage de tuiles de map d'un jeu (lignes/colonnes)
	 * Grâce à deux boucles imbriquées on lira chaque "cellule" du tableau 
	 * et on decidera si l'on doit afficher une tuile ("1") ou non ("0")
	 * @param filePath: string d'extension .txt
	 */
	static loadStrings(filePath) {

		// rawText sera notre texte brut
		let rawText = this.loadFile(filePath);

		/* grid sera notre tableau a 2 dimensions.
		Ici avec \n passé en argument la methode split() se charge de mettre 
		dans un tableau tout ce qui se trouve avant chaque separateur \n dans le 
		fichier brut, \n = retour à la ligne. 
		C'est comme ça que l'on obtient les "lignes" de notre tableau a 2 dim.
		La methode map() va nous creer les "colonnes" de notre tableau. 
		Elle créé un nouveau tableau peuplé des resultats de la fonction
		qu'on lui passe en argument. En l'occurence la fonction se charge de
		"spliter" chaque caractere d'une string (ici notre ligne) en 1 string
		a part entiere (grâce au separateur vide '').
		Le chainage de methodes nous permet de travailler ligne aprés ligne */

		let grid = rawText.split('\n').map(item => item.split(''));

		/* Explications++
			Pour un texte donné:
			000000000000000
			000000000000000

			split('\n') nous donne:
			["00000000000000"],
			["00000000000000"]

			et map(item => item.split('')) nous donne:
			["0","0","0","0","0","0","0","0","0"],
			["0","0","0","0","0","0","0","0","0"]

			Conclusion: map() === trés pratique!
		*/

		return grid;
	}

}