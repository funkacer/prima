<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra úkoly</title>
</head>
<body>
    <h1>Extra úkoly</h1>

    <?php

        echo "<h2>Suma čísel</h2>";
        $poleCisel = [3, 6, 4, 3, 3, 7, 2];
        //spocitat cyklem sumu pole

        $suma = 0;
        foreach ($poleCisel AS $cislo) {
            $suma += $cislo;
        }

        echo "Suma: $suma";

        echo "<h2>Nejvyšší číslo</h2>";
        $poleCisel2 = [-5, 7, 4, -3, 0, 11, 6, 3, 8, -4];
        //2) zjistit nejvyssi cislo v poli a vypsat ho
        $maximum = $poleCisel2[0];
        foreach ($poleCisel2 AS $cislo) {
            if ($cislo > $maximum) {
                $maximum = $cislo;
            }
        }
        echo "Maximum: $maximum";

        echo "<h2>Pole barev</h2>";
        $poleBarev = ["cervena", "modra", "bila", "zluta", "hneda"];
        //$hledanaBarva = "ruzova"; //bila, zluta, ruzova
        $hledanaBarva = ["ruzova", "bila", "zluta"][rand(0,2)];
        //3) napiste ckylus ktery zjsiti zda barva poli je nebo neni
        //pak vypiste vetu "Barva xxx v poli je/neni."
        $vysledek = false;
        foreach ($poleBarev AS $barva) {
            if ($barva == $hledanaBarva) {
                $vysledek = true;
                break;
            }
        }

        if ($vysledek) {
            echo "Barva $hledanaBarva v poli je.";
        } else {
            echo "Barva $hledanaBarva v poli neni.";
        }

        echo "<br>";
        $vysledekHledani = array_search($hledanaBarva, $poleBarev);
        if ($vysledekHledani === false) {
            echo "Barva v poli neni.";
        }else{
            echo "Barva v poli je.";
        }

        //vytvorte cyklem pole s 10 nahodnymi cisly od 0 az do 10
        //var_dump($poleNahodnychCisel)

        $poleNahodnychCisel = [];
        for ($i = 0; $i < 10; $i++) {
            $poleNahodnychCisel[] = rand(0, 10);
        }

        var_dump($poleNahodnychCisel);

        //vygenerujte náhodnou barvu pozadí

        $poleRGB = [];
        for ($i = 0; $i < 3; $i++) {
            $poleRGB[] = rand(0, 255);
        }

        echo "<style> body {
            background: rgb($poleRGB[0],$poleRGB[1],$poleRGB[2])
        }
        </style>";

    ?>
    
</body>
</html>