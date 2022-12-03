<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol If</title>
</head>
<body>
    <h1>Úkol If</h1>

    <?php
        $cislo = rand(0, 5);
        echo $cislo;
        echo "<br />";

        if ($cislo == 0) {
            echo "nula";
        } else if ($cislo % 2) {
            echo "liché";
        } else {
            echo "sudé";
        }

    ?>
    
</body>
</html>