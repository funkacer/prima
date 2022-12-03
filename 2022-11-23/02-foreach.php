<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyklus foreach</title>
</head>
<body>
    <h1>Cyklus foreach</h1>

    <?php
    $poleZviratka = ["kočka", "koala", "tukan", "medvěd", "zebra", "žirafa", "slon", "klokan", "slepice"];

    //vypište seznam do ul

    echo "<ul>";
    //toto je speciální cyklus pro pole
    //tato struktura vezme položku z pole a uloží do naší AS proměnné, pak provede tělo struktury
    foreach ($poleZviratka AS $zviratko) {
        echo "<li>".$zviratko."</li>";
    }
    echo "</ul>";

    //pokud potřebujeme při iteraci index nebo klíč, použijeme rozšířenou formu foreach
    $notebook = [
        "značka" => "msi",
        "ram" => 16,
        "tělo" => "kovové",
        "záruka" => false,
        "display" => "led"
    ];

    //json_encode($parametr)
    foreach ($notebook AS $klic => $parametr) {
        echo $klic.": ".var_export($parametr, true)."<br />";
    }

    ?>

    
    
</body>
</html>