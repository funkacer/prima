<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyklus While</title>
</head>
<body>
    <h1>Cyklus While</h1>

    <?php
        //while vypadá jako if ale po vykonání {} se vrátí ma začátek () a provode podmínku znovu
        $pocitadlo = 0;
        while ($pocitadlo < 7) {
            echo "Toto je jeden cyklus.";
            echo "<br />";
            $pocitadlo++;
        }

    ?>
    
</body>
</html>