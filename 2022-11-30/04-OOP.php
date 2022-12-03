<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <h1>OOP</h1>

    <?php

        //class je forma ze které vznikají objekty (instance)
        //konvence: názvy class začínají velkým písmenkem
        //proměnné uvnitř classy se nazývají vlastnosti (property)
        //funkce uvnitř classy se nazývají metody (method)
        class Uzivatel {
            // sem napíšeme seznam všech vlastností, které objekty budou mít
            public $jmeno;
            public $rokNarozeni;
            public $pohlavi;
            public $povolani;
            //lze snadno přidat
            public $jeZivy;

            function __construct($argJmeno, $argRokNarozeni, $argPohlavi, $argPovolani) {
                //toto je speciální funkce, které se říká constructor
                //automaticky se spustí při vytvoření nové instance
                //zde přiřazujeme argumenty různým vlastnostem
                $this->jmeno = $argJmeno;
                $this->rokNarozeni = $argRokNarozeni;
                $this->pohlavi = $argPohlavi;
                $this->povolani = $argPovolani;
                //ne všechny vlastnosti musí mít argument
                $this->jeZivy = true;
            }

            function umri() {
                $this->jeZivy = false;
            }

            function spocitejVek() {
                $vek = date("Y") - $this->rokNarozeni;
                return $vek;
            }

        }

        //objekty, které vznikají z classy, se nazývají instance
        $uzivatel1 = new Uzivatel("Jedna", 2000, "muž", "topič");
        var_dump($uzivatel1);

        $uzivatel2 = new Uzivatel("Dva", 1990, "žena", "prodavačka");
        var_dump($uzivatel2);

        //jak používat objekty
        echo "Uživatel $uzivatel1->jmeno se narodil v roce $uzivatel1->rokNarozeni.";
        echo "<br />";
        echo "Uživatel $uzivatel2->jmeno se narodil v roce $uzivatel2->rokNarozeni.";
        echo "<br />";

        //vlastnosti jde i měnit
        //ale jen pokud je vlastnost public
        //protected vlastnost nelze měnit mimo classu!!!
        $uzivatel1->jmeno = "Jednička";
        echo "Uživatel $uzivatel1->jmeno se narodil v roce $uzivatel1->rokNarozeni.";
        echo "<br />";

        //zavoláme metodu umři
        echo "Uživatel $uzivatel1->jmeno je živý? ".var_export($uzivatel1->jeZivy, true);
        echo "<br />";
        $uzivatel1->umri();
        echo "Uživatel $uzivatel1->jmeno je živý? ".var_export($uzivatel1->jeZivy, true);
        echo "<br />";

        echo "Uživatel $uzivatel2->jmeno má věk {$uzivatel2->spocitejVek()}.";
        echo "<br />";

    ?>
    
</body>
</html>