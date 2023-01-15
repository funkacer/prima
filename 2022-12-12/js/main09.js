//composer require components/jquery

let tlacitko = document.querySelector(".krocan");
tlacitko.addEventListener("click", () => {
    $.ajax({
        method: "POST",
        url: "nas-server.php",
        data: {
            min: 0,
            max: 100,
            randomSubmit: "yes"
        }
    }).done((msg) => {
        //alert("Data Saved: " + msg);
        document.querySelector("h2").innerHTML = msg;
    });
});

