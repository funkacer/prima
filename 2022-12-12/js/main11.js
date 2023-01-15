let tlacitko = document.querySelector(".vyber");
tlacitko.addEventListener("click", () => {
    $.ajax({
        url: 'https://randomuser.me/api/',
        //toto říká, v jakém formátu odpovídá server
        //pokud je json, tak rovnou převede na objekt
        dataType: 'json',
        success: function(data) {
          console.log(data);

          //vytáhnu si jméno a vložím do .jmeno
          let jmeno = data.results[0].name.first;
          document.querySelector(".jmeno").innerHTML = jmeno;

          let email = data.results[0].email;
          document.querySelector(".email").innerHTML = email;

          let urlObrazku = data.results[0].picture.large;
          document.querySelector(".obrazek").innerHTML = `<img src = '${urlObrazku}' alt = 'profilovka' />`;
        }
      });
})