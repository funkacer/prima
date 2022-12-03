<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Tabulka obvody kružnic</title>
</head>
<body>
    <h1>Úkol Tabulka obvody kružnic</h1>

    <?php

        echo "<table border = '1'>";
        echo "<tr>
            <th>Poloměr</th>
            <th>Obvod</th>
        </tr>";

        $poleR = [];

        for ($i=0; $i < 20; $i++) {

            $poleR[] = rand(0, 100);

        }

        foreach ($poleR as $r) {

            $obvod = round(2 * pi() * $r, 1);
            echo "<tr>
                <td>$r</td>
                <td>$obvod</td>
            </tr>";
        }

        echo "</table>";

    ?>
    
</body>
</html>