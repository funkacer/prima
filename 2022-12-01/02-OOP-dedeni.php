<?php

    // sem píšeme vlastnosti společné pro učitele a studenta
    class Uzivatel {
        static public $pocetUzivatelu = 0;

        private $id;
        public $jmeno;
        public $rodneCislo;

        function __construct($argId, $argJmeno, $argRodneCislo) {
            $this->id = $argId;
            $this->jmeno = $argJmeno;
            $this->rodneCislo = $argRodneCislo;

            Uzivatel::$pocetUzivatelu += 1;
        }

        function prejmenujSe($argNoveJmeno) {
            $this->jmeno = $argNoveJmeno;
        }

    }

    //classa Student dědí od classy Uzivatel
    class Student extends Uzivatel {
        //sem píšeme věci unikátní pro studenta
        public $prumer;
        public $obor;

        function __construct($argId, $argJmeno, $argRodneCislo, $argPrumer, $argObor) {
            //použijeme constructor rodiče
            parent::__construct($argId, $argJmeno, $argRodneCislo);
            //tyto unikátní vlastnosti studenta přiřazujeme jak jsme zvyklí
            $this->prumer = $argPrumer;
            $this->obor = $argObor;
        }
    }

    //classa Ucitel taky dědí od classy Uzivatel
    class Ucitel extends Uzivatel {
        //sem píšeme věci unikátní pro učitele
        public $plat;

        function __construct($argId, $argJmeno, $argRodneCislo, $argPlat) {
            //použijeme constructor rodiče
            parent::__construct($argId, $argJmeno, $argRodneCislo);
            //tyto unikátní vlastnosti učitele přiřazujeme jak jsme zvyklí
            $this->plat = $argPlat;
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP dědění</title>
</head>
<body>
    <h1>OOP dědění</h1>
    
    <?php
        //var_dump(new Student());
        //var_dump(new Ucitel());
        $ucitel = new Ucitel(1, "Jedna", 123, 1);
        $student = new Student(1, "Jedna", 123, "chemie", 1.8);

        var_dump($ucitel);
        var_dump($student);

        echo "Počet uživatelů ".Uzivatel::$pocetUzivatelu;
        echo "<br />";
        echo "<br />";


        /*
        public - the property or method can be accessed from everywhere. This is default
        protected - the property or method can be accessed within the class and by classes derived from that class (ale nelze je měnit zvenčí)
        private - the property or method can ONLY be accessed within the class
        (a na zděděných lze tudíž vytvořit znovu)
        */

        //vlastnosti jde i měnit
        //ale jen pokud je vlastnost public
        //private vlastnost nelze měnit mimo classu!!!
        //protected vlastnost nelze ani používat u potomků!!!
        echo "$ucitel->jmeno";
        echo "<br />";
        $ucitel->jmeno = "Dva";
        echo "<br />";
        echo "$ucitel->jmeno";

        echo "$ucitel->id";
        //pozor toto vytvoří nový klíč typu public, protože to protected id je na uzivateli (protected $id;)
        $ucitel->id = 2;
        echo $ucitel->id;

        // tohle totiž normálně jde
        $ucitel->cosi = 222;
        echo $ucitel->cosi;
        
        var_dump($ucitel);
        
    ?>
</body>
</html>