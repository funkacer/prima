//většina operátorů je stejná
//+ - * / ++ -- += % && |
//jediný rozdíl je v textovém operátoru, místo . se používá +

let jmeno = "Jirka";
console.log("Uživatel " + jmeno + " si objednal dort.");
console.log("3" + "6"); //36
console.log(3 + 6); //9
console.log(3 + "6"); //36
console.log(2 + 3 + "6"); //56
console.log("" + 3 + 4); //34 (jde zleva do prava po dvojicích)

//Na toto dávat pozor!
//pokud chceme s číslem počítat, musíme převést na číslo!!!
//pomocí +()
console.log(3 + +("6")); //9
let cislo = "40";
console.log(cislo + 1); //401
console.log(+(cislo) + 1); //41

//v JS je také možné použít template string
let uzivatel = "Karel";
let kredit = 300;
//musíme napsat backtick `` (altgr+7 2x nebo mezera) a ${}
console.log(`Uživatel ${uzivatel} má ${kredit} kreditů.`)

//místo "" lze psát vždy rovnou ``

//pro porovnávání nutné == (porovná se hodnota) nebo === (porovná i datový typ)
console.log(5 == "5"); //true
console.log(5 === "5"); //false

