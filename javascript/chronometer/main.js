const secondsContainer = document.getElementById('seconds');
const minutesContainer = document.getElementById('minutes');
const hoursContainer = document.getElementById('hours');

let seconds = 0;
let minutes = 0;
let hours = 0;

secondsContainer.innerText = seconds;
minutesContainer.innerText = minutes;
hoursContainer.innerText = hours;

window.setInterval(() => {
	seconds += 1;
	secondsContainer.innerText = seconds;

	if (seconds >= 59) {
		seconds = 0;
		minutes += 1;
		minutesContainer.innerText = minutes;
	}
	
	if (hours >= 59) {
		minutes = 0;
		hours += 1;
		hoursContainer.innerText = hours;
	}
}, 1000);