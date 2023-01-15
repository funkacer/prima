//tvorba tříd
//v ES6 už to vypadá normálně

class Fixa {

    //pokud chceme mít vlastnotí protected, dáme _vlastnost; private dáme #vlastnost
    //Tony toto nepoužívá v JS

    //funkce constructor se spustí pokazde, kdyz se vytvori instance
    constructor (argBarva, argObjem, argMaxObjem) {
        this.barva = argBarva;
        this.objem = argObjem;
        this.maxObjem = argMaxObjem;
    }

    //metody se uvnitř classy píšou bez slova function
    naplnSe (argInkoust) {
        this.objem += argInkoust;
        if (this.objem > this.maxObjem) {
            this.objem = this.maxObjem;
        }
    }

    napis (argText) {
        //každý znak bude fixu stát 0.7 inkoustu
        let spotreba = argText.length * 0.7;
        if (this.objem >= spotreba) {
            console.log(argText);
            this.objem -= spotreba;
        } else {
            console.log("Tato fixa nemá dost inkoustu.");
        }
    }

}

let fixa1 = new Fixa("červená", 120, 120);
let fixa2 = new Fixa("zelená", 120, 120);

fixa2.napis("Jak se máte");
console.log(fixa2);

fixa2.naplnSe(30);
console.log(fixa2);

