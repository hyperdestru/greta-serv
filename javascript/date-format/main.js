let date = new Date();

function formatDate(date) {
	let res = "";

	if (typeof date === "object" && date !== null && date !== undefined) {

		const days = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi',
		'Dimanche'];
		const months = ['Janvier','Février','Mars','Avril','Mai','Juin',
		'Juillet','Aout','Septembre','Octobre','Novembre','Décembre'];

		res += days[date.getDay()] + " ";
		res += (date.getDate() === 1) ? date.getDate() + "er " : date.getDate() + " ";
		res += months[date.getMonth()] + " ";
		res += date.getFullYear() + " ";

	} else {
		throw new Error("Bad argument");
	}

	return res;
}

function formatTime(date) {
	let res = "";

	if (typeof date === "object" && date !== null && date !== undefined) {

		res += date.getHours() + "h" + date.getMinutes();

	} else {
		throw new Error("Bad argument");
	}

	return res;
}
console.log(date);
console.log(formatDate(date));
console.log(formatTime(date));