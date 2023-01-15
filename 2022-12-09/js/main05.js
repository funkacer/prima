class Uzivatel {
    constructor (argJmeno, argHeslo) {
        this.jmeno = argJmeno;
        this.heslo = argHeslo;
    }
}

class Student extends Uzivatel {
    constructor (argJmeno, argHeslo, argObor, argRocnik) {
        //super zde reprezentuje constructor rodiče
        super(argJmeno, argHeslo);
        //zde doplnime vlastnosti unikátní pro studenta
        this.obor = argObor;
        this.rocnik = argRocnik;
    }
}