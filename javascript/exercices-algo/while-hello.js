'use strict'
var strict = (function() {return !!!this})()
if (strict) { console.log("strict mode enabled") } else {console.log("strict mode disabled")}

let user_continue = false;
let input;

while (!user_continue) {
	input = prompt("Do you want to quit ?");
	if (input === "yes") {
		user_continue = true;
	}
}