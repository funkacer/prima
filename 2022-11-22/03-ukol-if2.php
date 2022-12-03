<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol If 2</title>
</head>
<body>
    <h1>Úkol If 2</h1>

    <?php

        $pohlaviInt = rand(0,2);
        if ($pohlaviInt == 0) {
            $pohlavi = "muž";
        } else if ($pohlaviInt == 1) {
            $pohlavi = "žena";
        } else {
            $pohlavi = "unisex";
        }
        
        $vek = rand(17, 18);

        echo "Pohlaví: $pohlavi, Věk: $vek";
        echo "<br />";

        //zde je oblečení pro pány
        //zde je oblečení pro ženy
        //zde je unisex
        //-18 sorry nemáme dětské oblečení

        //vnější if kontroluje nejprve věk
        if ($vek >= 18) {
            //pokud je 18+, budeme kontrolovat pohlaví
            if ($pohlavi == "muž") {
                echo "zde je oblečení pro pány";
            } else if ($pohlavi == "žena") {
                echo "zde je oblečení pro ženy";
            } else {
                echo "zde je unisex";
            }
        } else {
            //pokud není 18+, nepotřebujeme ani pohlaví
            echo "sorry nemáme dětské oblečení";
        }

    ?>
    
</body>
</html>