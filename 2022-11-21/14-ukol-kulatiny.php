<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Kulatiny</title>
</head>
<body>
    <h1>Úkol Kulatiny</h1>

    <?php
        $vek = rand(1,100);
        echo "Věk: $vek. Do kulatin zbývá: ".(10 - $vek % 10)." let.";
    ?>
    
</body>
</html>