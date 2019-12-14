'use strict'

/*Retourne une chaine correspondante a une couleur en rgb choisie au hasard*/
function randomRgb() {
	let finalColor;
	let randR = Math.floor(Math.random() * (255 - 0)).toString();
	let randG = Math.floor(Math.random() * (255 - 0)).toString();
	let randB = Math.floor(Math.random() * (255 - 0)).toString();
	finalColor = "rgb(" + randR + "," + randG + "," + randB + ")";
	return finalColor;
}

const buttonWidth = "200px";
const buttonHeight = "100px";

/*Contiendra tous les rectangles de couleurs*/
const colorContainer = document.getElementById("color-container");
colorContainer.style.marginLeft = "55px";

/*Bouton pour lancer la generation des rectangles de couleurs*/
const launchButton = document.getElementById("launch-button");
launchButton.style.display = "block";
launchButton.style.width = buttonWidth;
launchButton.style.height = buttonHeight;
launchButton.style.marginLeft = "600px";
launchButton.style.marginBottom = "50px";
launchButton.style.borderRadius = "5px";
launchButton.style.backgroundColor = "grey";
launchButton.style.fontFamily = "arial";
launchButton.style.fontWeight = "bold";
launchButton.style.color = "white";

/*Le nombre de couleurs qui seront generées*/
const maxColors = 34;

/*Pour stocker les rectangles de couleurs (<div>) 
qui seront generés dynamiquement, servira a leur suppression*/
let colorRectStack = [];

let colorRect;
let colorParagraph;

launchButton.addEventListener("click", function(e) {

	/*Si il y en a on purge les rectangles de couleurs present dans le conteneur
	remise a zero en gros*/
	while (colorContainer.firstChild) {
		colorContainer.removeChild(colorContainer.firstChild);
	}

	for(let i = 0; i <= maxColors; i++) {

		/* Creation du rectangle de couleur*/
		colorRect = document.createElement("div");
		colorRect.style.display = 'inline-block';
		colorRect.style.width = buttonWidth;
		colorRect.style.height = buttonHeight;
		colorRect.style.backgroundColor = randomRgb();

		/*Creation du paragraphe de texte (i.e la couleur en rgb)*/
		colorParagraph = document.createElement("p");
		colorParagraph.textContent = colorRect.style.backgroundColor;
		colorParagraph.style.textAlign = "center";
		colorParagraph.style.verticalAlign = "middle";
		colorParagraph.style.fontFamily = "arial";
		colorParagraph.style.fontWeight = "bold";
		colorParagraph.style.color= "white";

		/*On met le texte rbg dans le rectangle de couleur*/
		colorRect.appendChild(colorParagraph);

		/*On met le rectangle generé dans la pile, 
		pour pouvoir purger les rectangles plus tard
		si on rappuie sur le gros bouton*/
		colorRectStack.push(colorRect);

		/*On met le rectangle coloré avec son texte associé dans le gros conteur
		qui contient les 34 rectangles generée*/
		colorContainer.appendChild(colorRect);
	}
});

