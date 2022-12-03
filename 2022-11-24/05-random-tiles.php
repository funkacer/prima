<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Random Tiles</title>
    <link rel="stylesheet" href="./css/style05.css">
</head>
<body>
    <h1>Úkol Random Tiles</h1>

    <div class="tiles-container">

    <?php

        $poleColors = ["tile pink", "tile blue", "tile green", "tile yellow"];
        //echo $poleColors[array_rand($poleColors)];

        for ($i = 0; $i < 10000; $i++) {
            $color = $poleColors[array_rand($poleColors)];
            echo "<div class='$color'></div>";
        }

        

    ?>


    </div>
    
</body>
</html>