<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol For Nadpisy</title>
</head>
<body>
    <h1>Úkol For Nadpisy</h1>

    <?php
        for ($cislo = 1; $cislo < 7; $cislo++) {
            echo "<h$cislo>Nadpis h$cislo</h$cislo>";
        }

        for ($cislo = 1; $cislo < 7; $cislo += 2) {
            echo "<h$cislo>Nadpis h$cislo</h$cislo>";
        }
    ?>
    
</body>
</html>