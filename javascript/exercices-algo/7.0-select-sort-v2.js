function sort_ascend(p_array) {

	let new_arr = p_array

	if(new_arr.length > 0) {

		for(let i = 0; i < new_arr.length; i++) {

			let pos_mini = i

			for (let j = i + 1; j < new_arr.length; j++) {

				if (new_arr[j] < new_arr[pos_mini]) {
					pos_mini = j
					let temp = new_arr[pos_mini]
					new_arr[pos_mini] = new_arr[i]
					new_arr[i] = temp
				}
			}

		}

	} else
		console.log("Empty array")

	return new_arr
}

function sort_descend(p_array) {

	let new_arr = p_array

	if (new_arr.length > 0) {

		for (let i = 0; i < new_arr.length; i++) {

			let pos_maxi = i

			for (let j = i + 1; j < new_arr.length; j++) {

				if (new_arr[j] > new_arr[pos_maxi]) {
					pos_mini = j
					let temp = new_arr[pos_mini]
					new_arr[pos_mini] = new_arr[i]
					new_arr[i] = temp
				}
			}
		}
		
	} else 
		console.log("Empty array")

	return new_arr
}

let nb_sample = [10,29,8,7,6,5,4,3,2,1,0]
console.log("Tableau non rangé n°1 = " + nb_sample.toString())
let sorted_array = sort_ascend(nb_sample)
console.log("Tableau rangé (ascendant) = " + sorted_array.toString())

console.log('\n')

let nb_sample_2 = [0,1,2,4,5,6,7,8,9,10,129]
console.log("Tableau non rangé n°2 = " + nb_sample_2.toString())
let sorted_array_2 = sort_descend(nb_sample_2)
console.log("Tableau rangé (descendant) = " + sorted_array_2.toString())