/*Retourne la date du jour, formatée en string 
en mode année-mois-jour si le format en arg est 'us' ou
en mode jour-mois-année si le format en arg est 'fr'.
Format US par defaut*/
function currentDateFormated(format = 'us') {
	let date = new Date();
	dateYear = date.getFullYear();
	/*On rajoute 1 car getMonth() renvoie entre 0 et 11 et non 1 et 12, weird*/
	dateMonth = date.getMonth()+1;
	dateDay = date.getDate();
	let formatedDate;
	if (format === 'us') {
		formatedDate = dateYear + '-' + dateMonth + '-' + dateDay;
	} else if (format === 'fr') {
		formatedDate = dateDay + '-' + dateMonth + '-' + dateYear;
	}
	return formatedDate;
}

function Task(pDesc, pDate, parent) {
	const task = document.createElement('li');
	task.desc = pDesc;
	task.date = pDate;
	task.textContent = task.desc + '. Avant le ' + task.date;

	task.append = function() {
		parent.appendChild(task);
	}

	/*Bouton (ou autre) qui permet la suppression de la tâche*/
	task.createDelbox = function() {
		const delBox = document.createElement('button');
		task.delBox = delBox;
		task.delBox.textContent = "Supprimer";
		task.delBox.style.marginLeft = "10px";
		/*Si on clique sur le bouton, le parent (ici la tache) est supprimé*/
		task.delBox.addEventListener('click', function(e) {
			task.remove();
		});

		task.appendChild(task.delBox);
		return task.delBox;
	}

	return task;
}

/*Pour vider toute la liste des tâches d'un seul coup + les champs inputs*/
function reset(pContainer, pFields) {
	while (pContainer.firstChild) {
		pContainer.removeChild(pContainer.firstChild);
	}

	/*On vide les champs (inputs).
	Peut être mieux d'utiliser une boucle classique ?*/
	pFields.forEach(e => e.value = null);
}

document.body.style.fontFamily = "arial";

let main = document.getElementsByTagName('main')[0];

/*Input description de la tâche*/
let taskDesc = document.createElement('input');
taskDesc.placeholder = "Faire...";
taskDesc.type = "text";
taskDesc.required = "required";
main.appendChild(taskDesc);
/******************************/

/*Input date de la tâche*/
let taskDate = document.createElement('input');
/*Input de type "date" (affichage d'un calendrier) non supporté par Safari*/
taskDate.type = "date";
taskDesc.required = "required";
taskDate.min = currentDateFormated('us');
taskDate.style.verticalAlign = "top";
main.appendChild(taskDate);
/*************************************/

/*Bouton creer une tâche*/
let submitButton = document.createElement('button');
submitButton.textContent = "Creer tâche";
main.appendChild(submitButton);
/************************/

/*Bouton vider la liste des tâches et vider les inputs*/
let purgeButton = document.createElement('button');
purgeButton.textContent = "Vider la liste";
main.appendChild(purgeButton);
/******************************************************/

/*Container (ul) qui contiendra les tâches (li)*/
let taskContainer = document.createElement('ul');
main.appendChild(taskContainer);
/***********************************************/

let task;

submitButton.addEventListener('click', function() {
	/*Initialisation (bon terme ?) d'un objet tâche*/
	task = Task(taskDesc.value, taskDate.value, taskContainer);

	if (task.desc !== "" && task.date !== "") {
		/*Accrochage de l'objet tâche a son parent (taskContainer) = affichage*/
		task.append();
		/*Attache d'un bouton de suppression à la tâche
		la suppression d'une tache lors du clic est directement
		geré dans l'objet*/
		task.createDelbox();
	}

});

/*On vide tout : liste des tâches + champs (tableau en parametre)*/
purgeButton.addEventListener('click', function() {
	reset(taskContainer, [taskDesc, taskDate]);
});