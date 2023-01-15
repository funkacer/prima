//kořenový uzel je document
console.log(document);

document.title = "Můj nový titulek";

let cas = 0;

//do titulku dejte, jak dlouho už na stránce je
setInterval(() => {
    let datum = new Date();
    document.title = datum.getDate() + "." + datum.getMonth() + "." + datum.getFullYear() + " " + datum.getHours() + ":" + datum.getMinutes() + ":" + datum.getSeconds() + " doba: " + cas;
    cas++;
}, 1000);