<?php
    if (array_key_exists("pocetNavstev", $_COOKIE)) {
        $aktualniPocet = $_COOKIE["pocetNavstev"] + 1;
        setcookie("pocetNavstev", $aktualniPocet, time() + 60*60*24*7);
        
    } else {
        setcookie("pocetNavstev", "1", time() + 60*60*24*7);
        $aktualniPocet = 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Věrnost</title>
</head>
<body>
    <h1>Úkol Věrnost</h1>

    <?php
        echo "Počet návštěv: $aktualniPocet";
        if (!($aktualniPocet % 10)) {
            echo "<h2>Opět jste tu po 10.</h2>";
        }
    ?>
    
</body>
</html>