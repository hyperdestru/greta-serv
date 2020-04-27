const app = new Vue({
	el: "#app",

	data: {
		word: "hyperdestru"
	},

	methods: {
		reverse: function() {
			this.word = this.word.split('').reverse().join('');
		},

		toLower: function() {
			this.word = this.word.toLowerCase();
		},

		toUpper: function() {
			this.word = this.word.toUpperCase();
		},

		filter: function() {
			this.word = this.word.split('').filter(a => a === "e").join('');
		}
	}
})