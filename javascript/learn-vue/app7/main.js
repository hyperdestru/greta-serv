const app = new Vue({

	el: "#app",

	data: function() {
		return {
			// A l'interieur des v-for on a accés aux propriétés de la portée parente
			// Donc dans un v-for on peut utiliser parentMessage.
			parentMessage: "What's cool",

			items: [
				{ name: "skateboard" },
				{ name: "bodyboard" },
				{ name: "palmes" },
				{ name: "paire de vans" }
			],

			filmObject: {
				name: "Old School",
				director: "Todd Phillips",
				casting: ["Luke Wilson", "Vince Vaughn", "Will Ferrell"]
			}
		}
	}
});