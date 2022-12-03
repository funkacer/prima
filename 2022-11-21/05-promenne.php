<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proměnné</title>
</head>
<body>
    <h1>Proměnné</h1>

    <?php
        //proměnné se zapisují $
        //v proměnné nesmí být mezera
        //používá se camelCase

        //vytvoření proměnné
        $pocetKreditu = 100;

        //použití proměnné;
        echo "<h2>Počet kreditů: $pocetKreditu</h2>";

        //proměnné lze lobovolně měnit
        $pocetKreditu = 200;

        //použití proměnné;
        echo "<h2>Počet kreditů: $pocetKreditu</h2>";

        //rand(); tato funkce vygeneruje náhodné číslo
        $pocetKreditu = rand(0, 1000);
        echo "<h2>Náhodný počet kreditů: $pocetKreditu</h2>";

        $jmenoUzivatele = "Jirka";
        echo "Uzivatel $jmenoUzivatele má $pocetKreditu kreditů.";


    ?>
    
</body>
</html>