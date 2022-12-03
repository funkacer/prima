<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematické funkce</title>
</head>
<body>
    <h1>Matematické funkce</h1>

    <?php


        //vrátí hodnotu pi
        echo pi();
        echo "<br />";

        //vrátí náhodné číslo
        echo rand(0, 10);
        echo "<br />";

        //max vrátí maximum z array
        echo max([0,1,2]);
        echo "<br />";

        //floor zaokrouhlí na celé číslo dolu
        $cislo = 3.78;
        echo floor($cislo);
        echo "<br />";

        //ceil zaokrouhlí na celé číslo NAHORU
        $cislo = 3.08;
        echo ceil($cislo);
        echo "<br />";

        //round zaokrouhlí číslo matematicky
        $cislo = 3.55;
        echo round($cislo, 1);
        echo "<br />";
        $cislo = 3.549;
        echo round($cislo, 1);
        echo "<br />";

    ?>
    
</body>
</html>