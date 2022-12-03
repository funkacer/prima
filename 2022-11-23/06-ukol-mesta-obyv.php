<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Města Obyvatelé</title>
</head>
<body>
    <h1>Úkol Města Obyvatelé</h1>

    <?php
        $poleMestAObyvatel = [
            "Praha" => ["Tony", "Paja", "Hanka"],
            "Brno" => ["David", "Veronika"],
            "Plzen" => ["Tom", "Tom", "Nikola", "Andrea"]
        ];

        echo "<table border = '1' cellspacing = '0' cellpadding = '5'>";
        foreach ($poleMestAObyvatel AS $mesto => $poleObyvatel) {
            echo "<tr><td>$mesto</td><td><ul>";
                foreach ($poleObyvatel AS $jmeno) {
                    echo "<li>$jmeno</li>";
                }
            echo "</ul></td></tr>";
        }
        echo "</table>";

    ?>
    
</body>
</html>