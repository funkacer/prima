//v PHP rand(0,10) .. int 0 až 10

//JS
console.log(Math.random());
//vygeneruje číslo >=0 a <1

//pro číslo do x vynásobíme x
console.log(Math.random()*5);

//pro int 0 - 4
console.log(Math.floor(Math.random()*5));

//pro int 1-5
console.log(Math.floor(Math.random()*5) + 1);

let poleOvoce = ["meloun", "mango", "ananas", "pomeranc", "jablko"]

//výběr náhodné položky z pole
console.log(poleOvoce[Math.floor(Math.random()*poleOvoce.length)]);

//randomizujte hrací kostku
console.log(Math.floor(Math.random()*6) + 1);

/*
let a = Math.ceil(Math.random()*6);
while (a != 0) {
    a = Math.ceil(Math.random()*6);
}
console.log(a);

*/