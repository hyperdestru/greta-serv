const app = new Vue({

	el: "#app",

	data: {
		counter: 0,
		name: "Hyperdestru",
		message: ""
	},

	methods: {
		greeting: function() {
			this.message = `Hello ${this.name} ! You have ${this.counter} candies !`;
		},
		say: function(msg) {
			alert(msg);
		}
	}
});