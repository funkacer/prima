//zmente barvu vsech li kone

let elmLiVKoni = document.querySelectorAll(".kun li");

elmLiVKoni.forEach((li) => {
    li.style.color = "red";
})


//u kocek zmente pouze licha LI
let elmLiVKocce = document.querySelectorAll(".kocka li");
let i = 1;
elmLiVKocce.forEach((li) => {
    if (i % 2) {
        li.style.color = "red";
    }
    i++;
})

