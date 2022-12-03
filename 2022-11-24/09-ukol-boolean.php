<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Boolean</title>
</head>
<body>
    <h1>Úkol Boolean</h1>

    <?php

    function inarray ($argStack, $argNeedle) {
        //$vysledek = false;
        foreach ($argStack as $polozka) {
            if ($polozka == $argNeedle) {
                //$vysledek = true;
                //break;
                return true;
            }
        }
        //return $vysledek;
        return false;
    }

    $pole = ["Je", "Možná"];
    $poleHledej = $pole;
    $poleHledej[] = "Není";
    $hledej = $poleHledej[array_rand($poleHledej)];

    echo "Pole $hledej hlásí výsledek: ".var_export(inarray($pole, $hledej), true);
    ?>
    
</body>
</html>