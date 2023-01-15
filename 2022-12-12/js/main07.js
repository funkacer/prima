let kolecko = document.querySelector(".kolecko");
kolecko.addEventListener("click", () => {
    /*
    //contains vrací boolean podle toho, zda "slon" je nebo ne
    if (kolecko.classList.contains("slon") == false) {
        //chceme přidat classu "slon"
        kolecko.classList.add("slon");
    } else {
        //chceme odebrat classu "slon"
        kolecko.classList.remove("slon");
    }
    */

    //cely if se da nahradit jednou funkcí
    kolecko.classList.toggle("slon");

})

/*
setInterval(() => {
    kolecko.classList.toggle("slon");
}, 1000)
*/