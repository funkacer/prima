let vek = prompt("Kolik je Vám let?");

let barva = "modra";
//mělo by se převést na číslo
if(+(vek) >= 18) {
    barva = "zelena"; //promennou lze zmenit
    console.log("Vítejte v baru.");
} else {
    console.log("Nemáte do baru přístup");
    let ovoce = "banan";
}

console.log(barva); //modrá nebo zelená
console.log(ovoce); //vždy chyba

//pozor! var se chová jinak!!!