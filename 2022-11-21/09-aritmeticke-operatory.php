<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmetické oprátory</title>
</head>
<body>
    <h1>Aritmetické oprátory</h1>

    <?php
        echo 5 + 5; //10
        echo "<br />";
        $cislo = 8;
        echo 5 + $cislo; //13
        echo "<br />";
        $dalsiCislo = 4;
        $vysledek = $cislo + $dalsiCislo;
        echo $vysledek; //12
        echo "<br />";
        echo 6 + 8 + 3; //17
        echo "<br />";
        echo "6" + "8" + 3; //17
        echo "<br />";
        //echo "kocka" + 7; //toto vrati chybu

        echo 5 - 3; //2
        echo "<br />";

        echo 3 * 3; //9
        echo "<br />";

        echo 9 / 3; //3
        echo "<br />";

        //násobení a dělení má přednost před sčítáním a odečítáním
        echo 3 + 2 * 5; //13
        echo "<br />";

        echo (3 + 2) * 5; //25
        echo "<br />";

        //MODULO % - kolik zbyde když se to celočíselně vydělí
        // % 2 lze zjistit zda je sudé=0 / liche=1
        echo 7 % 3; //1
        echo "<br />";
        echo 8 % 3; //2
        echo "<br />";
        echo 9 % 3; //0
        echo "<br />";
        echo 10 % 3; //1
        echo "<br />";

        //echo round(11 / 2);
        //echo "<br />";



    ?>
    
</body>
</html>