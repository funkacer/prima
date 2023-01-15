//stejné jako v PHP

let cislo = +(prompt("Zadejte číslo:"));

console.log("--------------WHILE--------------");

let counter = 0;
while (counter <= cislo) {
    console.log(counter);
    counter++;
}

console.log("---------------FOR---------------");

for (let pocitadlo = 0; pocitadlo <= cislo; pocitadlo++) {
    console.log(pocitadlo);
}


console.log("--------------BARVY--------------");

let poleBarev = ["cervena", "bila", "modra", "zluta", "zelena"];

for (let pocitadlo = 0; pocitadlo < poleBarev.length; pocitadlo++) {
    console.log(poleBarev[pocitadlo]);
}

//break je jako v PHP

//PHP mělo foreach
//JS má několik variant
//1) for of
console.log("--------------FOROF--------------");
for (barva of poleBarev) {
    console.log(barva);

}

//2) metoda forEach() - parametrem je anonymní funkce function () beze jména, do ní dáme proměnnou, tu použijeme v {}
console.log("-------------FOREACH-------------");
poleBarev.forEach(function (barva) {
    console.log(barva);
})

//v nové ES6 už anonymní funkce nepoužívat, ale použít funkci arrow (=>)
console.log("--------------ARROW--------------");
poleBarev.forEach((barva) => {
    console.log(barva);
})

//3) for in (nepoužívat)
for (klic in poleBarev) {
    console.log(poleBarev[klic]);
}