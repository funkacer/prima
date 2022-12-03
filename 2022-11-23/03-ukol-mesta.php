<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Města</title>
</head>
<body>
    <h1>Úkol Města</h1>

    <?php
    
    $mesta = ["Praha", "Paříž", "Řím"];

    echo "<table border = '1'>";
    foreach ($mesta AS $mesto) {
        echo "<tr>";
        echo "<td>$mesto</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>
</html>