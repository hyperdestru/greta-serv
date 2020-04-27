// Enregistrement local des composants
const MenuComponent = {
	data: function() {
		return {
			pages: [
				{ name: "home", link: "" },
				{ name: "about", link: "" },
				{ name: "articles", link: "" }
			]
		}
	},
	template:
		`<ul>
			<li v-for="page in pages" v-bind:key="page.name">
				<a v-bind:href="page.link">
					{{ page.name.toUpperCase() }}
				</a>
			</li>
		</ul>`
}

const BlogPost = {
	props: ['title'],
	template: 
		`<div>
			<h3>{{ title }}</h3>
			<p>BlablahBlablahBlablahBlablah</p>
		</div>`
}

const app = new Vue({
	el: "#app",
	components: {
		'menu-component': MenuComponent,
		'blog-post': BlogPost
	}
});