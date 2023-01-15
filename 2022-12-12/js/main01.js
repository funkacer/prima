
let barva = prompt("Zadejte barvu:");

//změníme text nadpisu
document.querySelector("h1").innerHTML = barva;

//změníme barvu pozadí
document.querySelector("body").style.backgroundColor = barva;