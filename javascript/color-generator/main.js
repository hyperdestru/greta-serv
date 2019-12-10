'use strict'
var strict = (function() {return !!!this})()
if (strict) { console.log("strict mode enabled") } else {console.log("strict mode disabled")}

/*******************************************************************************************/

function random_color() {
	let final_color
	let rand_r = Math.floor(Math.random() * (255 - 0)).toString()
	let rand_g = Math.floor(Math.random() * (255 - 0)).toString()
	let rand_b = Math.floor(Math.random() * (255 - 0)).toString()
	final_color = "rgb(" + rand_r + "," + rand_g + "," + rand_b + ")"
	return final_color
}

/******************************************************************************************/

const color_container = document.getElementById("color-container")
const launch_button = document.getElementById("launch-button")

const button_width = "200px"
const button_height = "100px"

color_container.style.marginLeft = "55px"

launch_button.style.display = "block"
launch_button.style.width = button_width
launch_button.style.height = button_height
launch_button.style.marginLeft = "600px"
launch_button.style.marginBottom = "50px"
launch_button.style.borderRadius = "5px"
launch_button.style.backgroundColor = "grey"
launch_button.style.fontFamily = "arial"
launch_button.style.fontWeight = "bold"
launch_button.style.color = "white"

const max_colors = 34
let buttons_stack = []

launch_button.addEventListener("click", function(e) {

	if(color_container.childNodes.length > 0) {

		for(let i = 0; i < buttons_stack.length; i++) {
			buttons_stack[i].remove()
		}
		
	}

	for(let i = 0; i <= max_colors; i++) {

		let new_button = document.createElement("div")
		let p = document.createElement("p")

		new_button.style.display = 'inline-block'
		new_button.style.width = button_width
		new_button.style.height = button_height
		new_button.style.backgroundColor = random_color()

		p.textContent = new_button.style.backgroundColor
		p.style.textAlign = "center"
		p.style.verticalAlign = "middle"
		p.style.fontFamily = "arial"
		p.style.fontWeight = "bold"
		p.style.color = "white"

		new_button.appendChild(p)
		buttons_stack.push(new_button)
		color_container.appendChild(new_button)

	}
})

