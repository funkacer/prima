//v JS mají pole pouze číselné indexy
//pokud chceme používat klíče, musíme data ukládat do objektů

let poleOsoba = ["Tony", 1992, true, ["plavani", "foceni", "video"], "lektor" ]

//pole se většinou používají pro uniformní data (teploty, ovoce)

//na mix data použijeme struktury

let objektOsoba = {
    jmeno: "Tony",
    rokNarozeni: 1992,
    jeZivy: true,
    hobby: ["plavani", "foceni", "video"],
    povolani: "lektor",
    notebook: {
        znacka: "msi",
        ram: 16,
        vybava: ["kovove telo", "bluetooth", "ctecka otisku", "webka"],
        jeVZaruce: false
    }
}

console.log(objektOsoba);

//výpis
console.log(objektOsoba.rokNarozeni);

//změna
objektOsoba.jeZivy = false;
console.log(objektOsoba.jeZivy);

console.log(objektOsoba.hobby[2]); //video
console.log(objektOsoba.notebook.vybava[1]); //bluetooth

//jak vložit nový klíč do struktury
console.log(objektOsoba);
objektOsoba.oblibenaBarva = "černá";
//protože objekt ještě nemá tuto vlastnost, JS ji přidá
console.log(objektOsoba);

//smazání vlastnosti

delete objektOsoba.povolani;
console.log(objektOsoba);


//zkusmo udělat zvířátko

let zvire = {
    jmeno: "Alik",
    typ: "pes",
    steka: true,
    zradlo: {snidane: "klobasy", obed: "boty", vecere: "knedliky"},
    barva: ["hnědá", "bílá", "fleky"],
    "je frajer": true
}

console.log(zvire);

// toto nejde!!!
//console.log(zvire."je frajer")

console.log(zvire["je frajer"]);

//mezery se nedoporučuje používat!!!