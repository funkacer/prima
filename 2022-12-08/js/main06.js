let poleZelenina = ["cuketa", "kedlubna", "brambora", "cibule"];

console.log(poleZelenina[2]); //brambora

poleZelenina[1] = "lilek";
console.log(poleZelenina[1]) //lilek

//vkládání nové hodnoty se liší!!!
//poleZelenina[] = "okurka"; //v PHP
poleZelenina.push("okurka");
console.log(poleZelenina);

//mazání se liší!!!
//první je index, druhý počet položek
//v PHP zůstala po položce díra
//v JS se všechny položky přeindexují, aby tam díra nebyla
poleZelenina.splice(3, 1);

console.log(poleZelenina);

console.log(poleZelenina.length); //4