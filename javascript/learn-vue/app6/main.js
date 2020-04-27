const vm = new Vue({
	el: "#app",

	data: {
		seen: true,
		
		styleObject: {
			width: "100px",
			height: "100px",
			backgroundColor: "#6894f9",
			textAlign: "center"
		}
	},

	methods: {
		disapear: function() {
			this.seen = false;
		}
	}
});