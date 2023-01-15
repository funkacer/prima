//setTimeout
//počká nějaký daný čas (ms) a pak provede nějakou arrow funkci

//třeba udělat něco po nějaké době od načtení stránky
setTimeout(() => {
    let nahodneCislo = Math.random();
    console.log(nahodneCislo);
}, 5000);

console.log("AAAAAAAAAAAAAAAAA");

//dělá stále dokola
//nejnižší hodnota je 4 ms
setInterval(() => {
    console.log(Date());
}, 1000);

//pokud chceme zastavit, musíme uložit do proměnné
//pak zavoláme clearInterval(proměnná)
let intervalA =
setInterval(() => {
    console.log("AAAAAAAAAAAAA");
}, 2500);

setTimeout(() => {
    //zastaví interval
    clearInterval(intervalA);
}, 30000);

//udělat třeba počítání do 30