// event je jakákaliv akce uživatele na stránce
//musíme specifikovat, jaký event chceme a na jakém elementu

//chceme po kliknutí na h1 změnit barvu pozadí

//1) zaměřit h1
let nadpis = document.querySelector("h1");

//2) pověsit na element "posluchač", 3) říct posluchači, co se má stát
//addEventListener: jaká událost nás zajímá, co se má stát
nadpis.addEventListener("click", () => {
    console.log("kliknul jsi na nadpis");
    nadpis.style.backgroundColor = "aqua";
})

let kachna = document.querySelector(".kachna");
let aktualniCislo = kachna.innerHTML
kachna.addEventListener("click", () => {
    //kachna.innerHTML--; //funguje
    
    if (aktualniCislo == 0) {
        kachna.innerHTML = "Gratulujeme k promarněnému času";
    } else {
        aktualniCislo--;
        kachna.innerHTML = aktualniCislo;
    }
})