//uzivatel zada cislo
//do konzole zacne odpocitavani
//kdyz se dostanete na 0 tak napiste happy new year

let cislo = +(prompt("Zadejte číslo"));

let timer = setInterval(() => {
    console.log(cislo);
    cislo--;
    if (cislo < 0) {
        clearInterval(timer);
        console.log("Ahoj je hotovo!");
    }
}, 1000);



