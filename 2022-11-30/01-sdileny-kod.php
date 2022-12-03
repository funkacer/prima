<?php

    if (array_key_exists("submit-form", $_POST)) {
        echo "OK";
        var_dump($_POST);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sdílený kód</title>
</head>
<body>
    <h1>Sdílený kód</h1>

    <?php
        include "./extra-soubor.php";

        require "./extra-soubor.php";

        //pokud soubor neexistuje, tak include vypíše warning, zatímco require crashne
        //require používat pro kritické knihovny, nejlepší vždy

        //toto připojí soubor jen jednou
        require_once "./extra-soubor.php";
        require_once "./extra-soubor.php";



    ?>
    
</body>
</html>