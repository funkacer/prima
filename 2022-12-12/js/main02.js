
let elmKolecko = document.querySelector(".kolecko")
let velikost = 50

setTimeout (() => {
    elmKolecko.style.backgroundColor = "red";
    //elmKolecko.style.height = "80px";
    //elmKolecko.style.width = "80px";
    clearInterval(intervalA);
}, 5000)


intervalA = setInterval (() => {
    elmKolecko.style.height = `${velikost}px`;
    elmKolecko.style.width = `${velikost}px`;
    velikost += 10;
}, 100)