<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Obvod kruhu</title>
</head>
<body>
    <h1>Úkol Obvod kruhu</h1>

    <?php
        $r = rand(1, 100);

        $obvodKruhu = round(2 * pi() * $r, 1);

        echo "Poloměr kruhu je: $r, obvod kruhu je: $obvodKruhu";

    ?>
    
</body>
</html>