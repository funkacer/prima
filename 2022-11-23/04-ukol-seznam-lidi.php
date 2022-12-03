<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Seznam lidí</title>
</head>
<body>
    <h1>Úkol Seznam lidí</h1>

    <?php

    $poleLidi = ["Tony", "Kuba", "Pepa", "David"];

    echo "<ol>";
    foreach ($poleLidi AS $osoba) {
        echo "<li>$osoba</li>";
    }
    echo "</ol>";

    ?>
    
</body>
</html>