const app = new Vue({

	el: "#app",

	data: function() {
		return {
			numbers: [ 1,2,3,4,5,6,7,8,9,10,11,12 ]
		}
	},

	computed: {
		evenNumbers: function() {
			return this.numbers.filter(n => n % 2 === 0);
		}
	}
});