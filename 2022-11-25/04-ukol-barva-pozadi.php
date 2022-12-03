<?php

    if (array_key_exists("submit", $_GET)) {
        $barva = $_GET["barva"];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Formulář barvy</title>
    <?php
        if (isset($barva)) {
            echo "<style>
            body {background-color: #$barva}
            </style>";
        }
    ?>
</head>
<body>
    <h1>Úkol Formulář barvy</h1>

    <form method="get">

        <label for="text">Zadejte barvu:</label>
        <input type="text" name="barva" id="text">
        <br /><br />
        <input type="submit" name="submit" value="Změnit pozadí">
        <hr />

    </form>
    
</body>
</html>