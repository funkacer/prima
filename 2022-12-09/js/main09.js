//getElementById()
//tato funkce vyžaduje, aby měl element Id

let elmLiKoala = document.getElementById("koala");
console.log(elmLiKoala);

//querySelector a querySelectorAll
//tyto dvě funkce selektují podle css selectoru (#id, .class, h1)

//query selector najde první element, který odpovídá selectoru
let elmKoala = document.querySelector("#koala");
let elmKocka = document.querySelector(".kocka");
let elmNadpis = document.querySelector("h1");

//chci přepsat text nadpisu
elmNadpis.innerHTML = "Toto je nový text nadpisu";

//texty kočky budu chtít mít zelené
elmKocka.style.color = "lightGreen";

//u koaly chci změnit barvu pozadí, používá se Camel Case místo -
elmKoala.style.backgroundColor = "#ADD621";
elmKoala.style.fontSize = "3em"; //1em je defaultní fontsize zařízení

//nemusime ukladat do promenne, mueze upravit rovnou
document.querySelector("h1").style.fontFamily = "courier";
//document.querySelector("h2").style.fontFamily = "courier"; //pozor tohle nefunguje

//pokud potřebujeme vybrat více elementů, použijeme querySelectorAll
let poleSyrVKocce = document.querySelectorAll(".kocka .syr") //všechny elementy syr uvnitr kocky
let poleSyru = document.querySelectorAll(".syr") //všechny elementy syr
document.querySelectorAll(".kocka.syr") //všechny elementy syr a zaroven kocka

poleSyrVKocce.forEach((syr) => {
    syr.style.backgroundColor = "yellow";
})

for (let syr of poleSyru) {
    syr.style.fontFamily = "Helvetica";
}

//muzeme upraovat i jednotlive elemnty v poli
//jenom druhej syr jsme obarvili cervene
poleSyru[1].style.color = "red";