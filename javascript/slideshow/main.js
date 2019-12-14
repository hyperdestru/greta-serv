'use strict'

function setPicture(obj, table, index) {
	obj.src = "images/" + table[index];
}

/****************************************/

const pictures = [
	'brazil.jpg',
	'fahr.jpg',
	'prisoners.jpg',
	'spaceodyssey.jpg'
];

const slideImg = document.getElementById('slideshow-picture');
const nextButton = document.getElementById('button-next');
const previousButton = document.getElementById('button-previous');

let slideIndex = 0;
const slideIndexMax = pictures.length - 1;

setPicture(slideImg, pictures, slideIndex);

nextButton.addEventListener('click', function(e) {
	if (slideIndex < slideIndexMax) {
		slideIndex++;
		setPicture(slideImg, pictures, slideIndex);
	}
});

previousButton.addEventListener('click', function(e) {
	if (slideIndex > 0) {
		slideIndex--;
		setPicture(slideImg, pictures, slideIndex);
	}
});

