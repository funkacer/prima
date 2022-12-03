<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol funkce</title>
</head>
<body>
    <h1>Úkol funkce</h1>

    <?php

    $veta = "Koala medvídkovitý (Phascolarctos cinereus, Goldfuss, 1817), známý také pod nesprávným označením medvídek koala, je stromový vačnatec žijící v Austrálii.";

    //je možné všechny znaky uvést v poli jako jeden parametr
    $veta = str_replace([",","(", ")"], "", $veta);

    $poleSlov = explode(" ", $veta);
    $pocetSlov = count($poleSlov);
    echo "Počet slov ve větě je: $pocetSlov";
    echo "<br />";

    $posledniSlovo = end($poleSlov);
    echo "Poslední slovo je: $posledniSlovo";
    echo "<br />";

    var_dump($poleSlov);


    ?>
    
</body>
</html>