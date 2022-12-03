<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol teploty</title>
</head>
<body>
    <h1>Úkol teploty</h1>

    <?php

    //Multiply the °C temperature by 1.8. Add 32 to this number

    //$tabulka = "<table border = '1' cellspacing = '0' cellpadding = '5'>";
    echo "<table border = '1' cellspacing = '0' cellpadding = '5'>";

    for ($celsius = -100; $celsius <= 100; $celsius += 10) {
        $fahrnheit = $celsius*1.8 + 32;
        //$tabulka .= "<tr><td>$celsius</td><td>$fahrnheit</td></tr>";
        echo "<tr>
            <td>$celsius</td>
            <td>$fahrnheit</td>
        </tr>";

    }

    //$tabulka .= "</tabulka>";
    echo "</tabulka>";

    //echo $tabulka;

    ?>
    
</body>
</html>