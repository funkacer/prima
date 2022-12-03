<?php

    function cNaF ($argCelsius) {
        //Divide by 5, then multiply by 9, then add 32
        $resultFahrnheit = $argCelsius / 5 * 9 + 32;
        return $resultFahrnheit;
    }

    function fNaC ($argFahrenheit) {
        //Deduct 32, then multiply by 5, then divide by 9
        $resultCelsius = ($argFahrenheit - 32) * 5 / 9;
        return $resultCelsius;   
    }

    $stupneC = 0;
    $stupneF = 32;

    if (array_key_exists("submit-c", $_POST)) {
        if (is_numeric($_POST["stupne-c"])) {
            //pokud je parametr číslo, provedeme výpočet
            $stupneC = $_POST["stupne-c"];
            $stupneF = cNaF($stupneC);
        } else {
            //jinak vytvoříme proměnnou chyba
            $chyba = "Zadali jste špatný data pro stupně C.";
        }
        
    }

    if (array_key_exists("submit-f", $_POST)) {
        if (is_numeric($_POST["stupne-f"])) {
            //pokud je parametr číslo, provedeme výpočet
            $stupneF = $_POST["stupne-f"];
            $stupneC = fNaC($stupneF);
        } else {
            //jinak vytvoříme proměnnou chyba
            $chyba = "Zadali jste špatný data pro stupně F.";
        }
        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol převodník teplot</title>
</head>
<body>
    <h1>Úkol převodník teplot</h1>

    <form action="" method="post">
        <label for="c">Stupně C</label>
        <input type="text" name="stupne-c" id="c" value = "<?php echo $stupneC; ?>">

        <label for="f">Stupně F</label>
        <input type="text" name="stupne-f" id="f" value = "<?php echo $stupneF; ?>">

        <hr>
        <input type="submit" name="submit-c" value="C -> F">
        <input type="submit" name="submit-f" value="F -> C">

    </form>

    <h2><?php 
        if (isset($chyba)) {
            echo $chyba;
        }
    ?></h2>
    
</body>
</html>