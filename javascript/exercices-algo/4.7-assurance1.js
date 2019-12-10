let age = parseInt(prompt("Age ?"))
let accident = parseInt(prompt("Number of accidents ?"))
let fid = parseInt(prompt("Fidelity ?"))
let licence = parseInt(prompt("Licence for how many years ?"))
let contracts = ["refused", "red", "orange", "green", "blue"]
//Contracts index, we start at the "red" contract type
let c_index = 1

if (age < 25 && licence < 2) {

	if (accident === 0)
  		c_index = 1
  	else if (accident > 0)
    	c_index = 0

} else if ((age < 25 && licence > 2) || (age > 25 && licence < 2)) {

    if (accident === 0)
    	c_index = 2
    else if (accident === 1)
    	c_index -= 1
    else if (accident > 1)
    	c_index -= 2

} else if (age > 25 && licence > 2) {

	if (accident === 0)
		c_index = 3
	else if (accident === 1)
		c_index -= 1
	else if (accident === 2)
		c_index -= 2
	else if (accident > 2)
		c_index -= 3
}

if (fid >= 5) {
	if (c_index < contracts.length)
		c_index++
}

let current_contract = contracts[c_index]
alert("Contract type for this user is : " + current_contract.toUpperCase())