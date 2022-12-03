<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyklus For</title>
</head>
<body>
    <h1>Cyklus For</h1>

    <?php
        
        //na rozdíl od while cyklu se vše píše do ()
        //(stav; podmínka; opakovaný výraz)
        for ($cislo = 5; $cislo < 14; $cislo++) {
            echo $cislo;
            echo "<br/>";
        }

        echo "<hr/>";

        for ($cislo = 10; $cislo >= 0; $cislo--) {
            echo $cislo;
            echo "<br/>";
        }

        //cyklus for i while jsou blokujici struktury,
        //dokud cyklus neskončí tak program dál nepokračuje

    ?>
    
</body>
</html>