//prompt vypíše dialogové okno pro zadání
let vek = prompt("Zadejte svůj věk");
//odpověď je vždy string!!!
let budouciVek = +(vek) + 1;
console.log("Za rok Vám bude " + budouciVek);
console.log(`Za rok Vám bude ${budouciVek}`);

//pokud nejde převést na číslo, vrátí NaN (Not a Number)
console.log("kocka" / 5);