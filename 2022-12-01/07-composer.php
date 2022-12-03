<?php

    //composer require primakurzy/hello-php (z terminálu ve složce kde je php)
    //nainstaluje knihovnu

    //composer install postahuje knihovny z composer.json / composer.lock
    //composer update dostahuje updaty

    //composer show (přehled)
    //composer show primakurzy/hello-php (detail)
    //composer show primakurzy/hello-php --all (vypíše všechny dostupné verze)

    //composer require primakurzy/hello-php v1.1 (nainstaluje verzi 1.1)

    //někdy se dostaneme do situace, že potřebujeme použít starší verzi knihovny !!!

    //tímto se načtou všechny composer knihovny do php

    //lze připojit i ručně stažením adresáře z githubu a require soubor ze složky src (pro primakurzy)

    //nmp je balíčkovací program pro js

    require_once "./vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>
    <h1>Hello PHP</h1>

    <?php
         echo "Funkce sayHello() říká: ".sayHello();
    ?>
    
</body>
</html>