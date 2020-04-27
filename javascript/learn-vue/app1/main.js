const app = new Vue({
	el: '#app',
	data: {
		message: "Yes hello ! Nous sommes le " + new Date().toLocaleDateString(),
		seen: true,
		myList: [
			{ name: 'cereales' },
			{ name: 'soda mojito' },
			{ name: 'lait' },
			{ name: 'gateaux' },
			{ name: 'bonbons' },
		]
	}
});