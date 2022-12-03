<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Funkce kruh</title>
    <style>
        th, td {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Úkol Funkce kruh</h1>

    <?php

        function obvodKruhu ($argPolomer) {
            $obvodKruhu = $argPolomer * 2 * pi();
            return $obvodKruhu;
        }

        $polomerKruhu = 10;
        
        $polePolomery = [];

        for ($i = 0; $i < 5; $i++) {
            $polePolomery[] = rand(0,100);
        }

        echo "<table border = '1'>";
        echo "<tr>
            <th>Průměr</th>
            <th>Poloměr</th>
        </tr>";
        
        foreach ($polePolomery AS $polomerKruhu) {
            $obvodKruhu = round(obvodKruhu($polomerKruhu), 1);
            //echo "Průměr kruhu je: $polomerKruhu. Obvod kruhu je: $obvodKruhu.";
            //echo "<br />";
            echo "<tr>
                <td>$polomerKruhu</td>
                <td>$obvodKruhu</td>
            </tr>";

        }

        echo "</table'>";

    ?>
    
</body>
</html>