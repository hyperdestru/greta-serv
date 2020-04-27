Vue.component('footer-component', {
	props: ['year'],
	template: '<p>Copyright {{ year }}</p>'
});

Vue.component('menu-component', {
	props: ['page'],
	template: '<li>{{ page.name }}</li>'
});

const vm = new Vue({
	el: '#app',
	data: {
		pages: [
			{ id: 0, name: 'Home' },
			{ id: 1, name: 'About' },
			{ id: 2, name: 'Dashboard' },
		],
		year: null
	},

	methods: {
		getYear: function() {
			this.year = new Date().getFullYear();
		}
	},

	created: function() {
		this.getYear();
	},

	// Computed properties
	computed: {
		// Getter for the computed property currentYear
		currentYear: function() {
			return new Date().getFullYear();
		},

		// Or in developped form
		someOtherComputedProperty: {
			// Getter
			get: function() {
				//return...
			},

			// Setter
			set: function() {
				//...
			}
		}
	}
	
})