console.log("data non touchée :");
const data = [10, 50, 45, 6, -6, 0, -78, 9, 10];
console.log(data);

console.log("Somme de data :");
const sum = data.reduce((total, num) => total + num, 0);
console.log(sum);

console.log("Tri ascendant :");
const asc = data.sort((a, b) => a > b);
console.log(asc);

console.log("Tri descendant :");
const desc = data.sort((a, b) => a < b);
console.log(desc);

console.log("Que les positifs dans data :");
const onlyPos = data.filter(a => a >= 0);
console.log(onlyPos);

console.log("Attention sort() change le tableau! :")
console.log(data);