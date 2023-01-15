//chceme zabránit přesměrování
let tucnak = document.querySelector("#tucnak");
tucnak.addEventListener("click", (udalost) => {
    udalost.preventDefault(); //zastavili jsme odkaz
    alert("Chystáte se odejít z naší stránky pryč");

    //takto můžeme uživatele pomocí JS přesměrovat na jinou adresu
    window.location.href = "https://primakurzy.cz";
});

//zastavit odeslání formuláře
let zebra = document.querySelector("#zebra");
zebra.addEventListener("click", (e) => {
    e.preventDefault(); //zastavili jsme odkaz
    alert("Chystáte se odeslat formulář");

    //nyní můžeme pomocí JS validovat input
    //např. chceme alespoň 3 a více znaků
    let jmeno = document.querySelector("#koza");
    //vlastnost value nám zjistí, co zadal do políčka
    console.log(jmeno.value);

    if (jmeno.value.length >= 3) {
        let formular = document.querySelector("#zralok");
        formular.submit();
    }

});