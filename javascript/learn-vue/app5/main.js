const someData = { a: 1 }

const vm = new Vue({
	el: '#app',
	data: someData,

	// created() est un "hook" de cycle de vie, appelé une fois l'instance crééé
	// D'autres hooks: mounted, updated, destroyed...
	created: function() {
		// this est une reference à l'instance de vm (c'est specifique aux hooks)
		// Ne pas utiliser les fonctions flechées sur les propriétés ou fonctions de rappel
		// (comme les hooks) car elles sont liées au contexte parent donc this ne sera pas
		// l'instance de Vue.
		console.log("App created! 'a' is " + this.a)
	}
});

someData.a // 1
vm.a // 1

someData.a = 40
vm.a // 40 --> reactive properties

vm.a = 100
someData.a // 100 ! --> works both ways

vm.$data // To access the data object of the Vue instance config argument
vm.$data === someData // true
vm.$el === document.getElementById('app') // true

vm.$data.a === vm.a // Same thing, true

// $watch est une methode de l'instance
vm.$watch('a', function(newVal, oldVal) {
	// Cette fonction de rappel sera appellée quand la valeur de vm.a changera
	console.log("Value of 'a' changed !")
});