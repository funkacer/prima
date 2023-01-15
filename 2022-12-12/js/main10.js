let osoba = {
    jmeno: "Tony",
    rokNarozeni: 1990,
    hobby: ["technika", "posilovna"],
    jeZenaty: false
};

console.log(osoba);

//prevedeme objekt na string
let stringObjektu = JSON.stringify(osoba);

console.log(stringObjektu);

odpovedOdServeru = '{"jmeno":"Anton\u00edn","rokNarozeni":1992,"hobby":["technika","posilovna","bazen"],"jeZenaty":false}';
let jsObjekt = JSON.parse(odpovedOdServeru);
console.log(jsObjekt);