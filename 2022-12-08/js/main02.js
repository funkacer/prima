//proměnné
//var //do ES5 !! už nepoužívat
//const a let //od verze ES6

//const a let se píáše jen při vytvoření proměnné

const rokNarození = 1992;

console.log(rokNarození);

//const nelze měnit
//rokNarození = 2009;

let jmeno = "Jirka";
console.log(jmeno);

jmeno = "Karel";
console.log(jmeno);

//!!!důležitá informace
//scope proměnných let a const jsou vnější {}
//tzn. pokud vznikne uvnitř for, if, while, tak mimo neexistuje a nelze ji použít

