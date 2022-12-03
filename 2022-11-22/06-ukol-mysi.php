<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Myši</title>
</head>
<body>
    <h1>Úkol Myši</h1>

    <?php

    $mysi = 2;
    $mladat = 8;
    $rok = 0;

    while ($mysi <= 3000000) {
        $mysi += $mysi/2 * 8;
        $rok++;

    }

    echo "Počet myší je $mysi a trvalo to $rok let.";

    ?>
    
</body>
</html>