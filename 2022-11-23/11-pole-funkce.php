<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkce polí</title>
</head>
<body>
    <h1>Funkce polí</h1>

    <?php

        $poleBarev = ["cerna", "modra", "bila", "zluta", "cervena"];

        //count vrátí počet položek
        echo count($poleBarev);
        echo "<br />";

        //in_array vrátí boolean zda existuje
        echo var_export(in_array("modra", $poleBarev), true);
        echo "<br />";
        echo var_export(in_array("hneda", $poleBarev), true);
        echo "<br />";

        //shuffle zamíchá náhodně pole
        //tato funkce modifikuje originální pole!!!
        //udělá indexy od 0 bez děr
        unset($poleBarev[1]);
        shuffle($poleBarev);
        var_dump($poleBarev);

        //array_keys()
        //tato funkce vrátí pole klíčů bez hodnot
        $poleOsoba = [
            "jmeno" => "Tony",
            "rok narozeni" => 1992,
            "je zivy" => true
        ];
        var_dump(array_keys($poleOsoba));


        //array_keys_exists
        var_dump(array_key_exists("jmeno", $poleOsoba));
        var_dump(array_key_exists("jmenoo", $poleOsoba));

    ?>
    
</body>
</html>