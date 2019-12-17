document.body.style.fontFamily = "arial";

let form = document.createElement('form');
document.body.appendChild(form);

let taskDesc = document.createElement('input');
taskDesc.placeholder = "Faire...";
document.body.appendChild(taskDesc);

let taskDate = document.createElement('input');
taskDate.placeholder = "Avant le...";
document.body.appendChild(taskDate);

let submitButton = document.createElement('button');
submitButton.textContent = "Creer tâche";
document.body.appendChild(submitButton);

let purgeButton = document.createElement('button');
purgeButton.textContent = "Vider la liste";
document.body.appendChild(purgeButton);

let taskContainer = document.createElement('ul');
document.body.appendChild(taskContainer);

let task = {};

let dateRegex = /\d{2}\/\d{2}\/\d{4}/;

submitButton.addEventListener('click', function() {
	if (taskDesc.value !== "" && dateRegex.test(taskDate.value)) {
		task = document.createElement('li');
		task.textContent = taskDesc.value + ". Avant le " + taskDate.value;
		taskContainer.appendChild(task);
	}
});

purgeButton.addEventListener('click', function() {
	while (taskContainer.firstChild) {
		taskContainer.removeChild(taskContainer.firstChild);
	}
	taskDesc.value = null;
	taskDate.value = null;
});