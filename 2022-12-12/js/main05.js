

elmMravenec = document.querySelector(".mravenec");

elmMravenec.addEventListener("click", () => {
    elmMravenec.innerHTML = Math.floor(Math.random()*6) + 1;
})