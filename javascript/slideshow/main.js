'use strict'

class Movie {
	constructor(title, year, src) {
		this.title = title;
		this.year = year;
		this.src = src;
		movies.push(this);
	}
};

function display() {
	slideImg.src = "images/" + movies[slideIndex].src;
	movieTitle.textContent = movies[slideIndex].title;
	movieYear.textContent = movies[slideIndex].year;
}

/*Init du tableau qui contiendra les objets movie*/
const movies = [];

/*Creation des objets films,
mis dans le bon tableau directement via le constructeur (cf. classe)*/
const movie1 = new Movie("Brazil", 1985, "brazil.jpg");
const movie2 = new Movie("Prisoners", 2013, "prisoners.jpg");
const movie3 = new Movie("2001, A Space Odyssey", 1968, "spaceodyssey.jpg");
const movie4 = new Movie("Fahrenheit 451", 1966, "fahrenheit451.jpg");

/*Recup des elements du DOM*/
let slideImg = document.getElementById('slideshow-picture');
let nextButton = document.getElementById('button-next');
let previousButton = document.getElementById('button-previous');
let movieTitle = document.getElementById('movie-title');
let movieYear = document.getElementById('movie-year');

/*Initialisation de l'index de lecture du tableau d'objets à zero*/
let slideIndex = 0;
const slideIndexMax = movies.length - 1;

/*Display par defaut (index a zero -> 1er film) avant le 1er clic*/
display();

nextButton.addEventListener('click', function(e) {
	if (slideIndex < slideIndexMax) {
		slideIndex++;
		display()
	}
});

previousButton.addEventListener('click', function(e) {
	if (slideIndex > 0) {
		slideIndex--;
		display();
	}
});