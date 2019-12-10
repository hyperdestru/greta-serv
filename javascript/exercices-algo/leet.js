let alph = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z, ".split(',');
let leet = "4,8,<,d,3,f,6,h,1,j,k,1,m,n,0,p,q,2,5,7,v,v,w,*,y,z,.".split(',');
let leet2 = "4,8,<,|),3,|=,6,!-!,1,`1,|<,!.,!v!,%,0,.o,0;,2,5,+,µ,^,M,*,`/,£,.".split(',');

function to_leet(input, palphabet, pleet) {
	let new_str = "";

	for(let i = 0; i < input.length; i++) {

		for(let j = 0; j < palphabet.length; j++) {

			if(input[i] === palphabet[j]) {
				new_str += pleet[j];
	  		}

		}
	}

	return new_str;
}

let str = prompt("Texte a traduire :");

console.log(str + " => " + to_leet(str, alph, leet2));
