let data = [10, 7, -10, 0, 2, 3, 4, 5, 96];

function isPos(nb) {
	return nb > 0;
}

function isEven(nb) {
	return nb % 2 === 0;
}

function isOdd(nb) {
	return !isEven(nb);
}

let posData = data.filter(isPos);
let evenData = data.filter(isEven);
let oddData = data.filter(isOdd);

console.log(posData);
console.log(evenData);
console.log(oddData);