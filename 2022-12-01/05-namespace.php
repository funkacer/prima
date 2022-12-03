<?php

    //bez tohoto se musí psát Eshop\Produkt nebo Eshop\Objednavka
    //s tímto lze jen Objednavka nebo PR
    use Eshop\Objednavka;
    use Eshop\Produkt AS PR;

    require_once "./knihovna-eshop.php";

    class Produkt {
        protected $cena;
        protected $jmeno;

        function __construct($argCena, $argJmeno) {
            $this->cena = $argCena;
            $this->jmeno = $argJmeno;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jmenné prostory</title>
</head>
<body>
    <h1>Jmenné prostory</h1>

    <?php
        var_dump(new Produkt(50, "hrnek"));
        var_dump(new Eshop\Produkt(1, 100, 50, "hrnek"));
        //toto můžeme používat bez namespace protože nahoře použijeme use
        //ale jen když to je jedinečné. u Produkt by vznikla duplicita
        var_dump(new Objednavka(1, 100, 50));
        //pokud by vznikla duplicita, lze použít use .. AS ..
        var_dump(new PR(1, 100, 50, "hrnek"));
    ?>

    
</body>
</html>