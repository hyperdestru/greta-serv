'use strict'

let citizen = {
	avatar: "",
	name: "THX-1138",
	age: 46,
	type: "Mod. 45C",
	hobbies: "Food, fishing"
}

let name = document.getElementsByClassName('name')[0];
name.textContent = citizen.name;

let age = document.getElementsByClassName('age')[0];
age.textContent = citizen.age;

let type = document.getElementsByClassName('type')[0];
type.textContent = citizen.type;

let hobbies = document.getElementsByClassName('hobbies')[0];
hobbies.textContent = citizen.hobbies;

let avatar = document.getElementsByClassName('avatar')[0];
avatar.src = 'http://images.fandango.com/ImageRenderer/0/0/redesign/static/img/default_poster.png/0/images/masterrepository/other/1_MCDTHEL_EC001_H.JPG';
avatar.width = '400';
avatar.height = '250';

let like_count = 0;
let like_button = document.getElementsByClassName('like-button')[0];
let like_display = document.getElementsByClassName('like-display')[0];
like_button.addEventListener('click', function(e) {
	like_count++;
	like_display.textContent = like_count;
});