// Enregistrement global du composant avec Vue.component
// Doit être AVANT l'instance de Vue
Vue.component('menu-component', {
	data: function() {
		return {
			pages: [
				{ name: "home", link: "" },
				{ name: "about", link: "" },
				{ name: "dashboard", link: "" }
			]
		}
	},

	template: 
	`
		<ul>
			<li v-for="page in pages" v-bind:key="page.name">
				<a v-bind:href="page.link">{{ page.name.toUpperCase() }}</a>
			</li>
		</ul>
	`
});

Vue.component('blog-post', {
	props: ['title'],

	template: 
	`	<div>
			<h3>{{ title }}</h3>
			<p>BlablahBlablahBlablahBlablah</p>
		</div>
	`
});

const app = new Vue({
	el: "#app"
});