//nejprve zamerime vsechna li kone

let vsechnaLiKun = document.querySelectorAll(".kun li");
for (let li of vsechnaLiKun) {
    li.addEventListener("click", () => {
        li.style.backgroundColor = "brown";
    });
}