let arr_1 = [4,8,7,12]
let arr_2 = [3,6]
let result = 0
let phrase = ""

for (let i = 0; i < arr_2.length; i++) {

  for (let j = 0; j < arr_1.length; j++) {

    result += arr_2[i] * arr_1[j]
    phrase += arr_2[i] + "*" + arr_1[j]

    //Si on arrive a la fin des 2 boucles on ecrit un egal
    if (i === arr_2.length - 1 && j === arr_1.length - 1)
      phrase += " = "
    //Sinon on rajoute un +
    else
      phrase += "+"
  }
}

console.log(phrase + result)