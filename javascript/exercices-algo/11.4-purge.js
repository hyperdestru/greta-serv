function purge(input, char) {
	let str = input; 
	let to_purge = char;
	let new_str = "";

	for(let i = 0; i < input.length; i++) {

		if(input[i] === to_purge) {
			new_str += '';
		}else {
			new_str += input[i];
		}
	}

	return new_str;
}

console.log(purge('muolato', 'm'));