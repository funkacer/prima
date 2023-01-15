//vanilla:
//document.querySelector("h1");

//toto obalí h1 do obejktu se spoutou nových metod
console.log($("h1"));

//metoda css umožní styly
$("h1").css({
    "background-color": "pink",
    "font-size": "50px",
    "font-family": "courier",
    "color": "lightblue"
});

$(".papousek").css({
    "background-color": "grey",
    "font-size": "15px",
    "font-family": "courier",
    "color": "blue"
});

//metoda on umožní události
$("h1").on("click", () => {
    $("h1").html("Toto je nový titulek");
})

//pozor pro elementy
$(".hroch li").on("click", (e) => {
    $(e.currentTarget).css({
        "background-color": "grey"
    })
});