<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol While Nadpisy</title>
</head>
<body>
    <h1>Úkol While Nadpisy</h1>

    <?php 
        $counter = 1;
        while ($counter < 7) {
            echo "<h{$counter}>Nadpis h{$counter}</h{$counter}>";
            $counter++;
        }
    ?>
    
</body>
</html>