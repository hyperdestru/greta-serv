//Return the hypothenuse of a triangle using pythagore theorem
function math_hyp(ab, ac) {
	let bc;

	if (!isNaN(ab) && !isNaN(ac)) {
		bc = Math.sqrt(Math.pow(parseInt(ab), 2) + Math.pow(parseInt(ac), 2));
	} else{
		console.log("Parameters cannot be evaluated as numbers.")
	}

	return bc;
}

console.log(math_hyp(3, 4));