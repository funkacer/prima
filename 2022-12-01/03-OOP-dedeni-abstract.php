<?php

    // sem píšeme vlastnosti společné pro učitele a studenta
    // slovem abstract určíme, že classa slouží jen pro podědění, nelze instanciovat samostatně
    abstract class Uzivatel {

        protected $jmeno;
        protected $rodneCislo;

        function __construct($argJmeno, $argRodneCislo) {
            $this->jmeno = $argJmeno;
            $this->rodneCislo = $argRodneCislo;
        }
    }

    //classa Student dědí od classy Uzivatel
    class Student extends Uzivatel {
        //sem píšeme věci unikátní pro studenta
        protected $obor;

        function __construct($argJmeno, $argRodneCislo, $argObor) {
            //použijeme constructor rodiče
            parent::__construct($argJmeno, $argRodneCislo);
            //tyto unikátní vlastnosti studenta přiřazujeme jak jsme zvyklí
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

        var_dump(new uzivatel("Tony" , 123));

        
    ?>
</body>
</html>