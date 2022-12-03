<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Převod jednotek</title>
</head>
<body>
    <h1>Úkol Převod jednotek</h1>

    <?php
        function cNaF ($argCelsius) {
            //Divide by 5, then multiply by 9, then add 32
            $resultFahrnheit = $argCelsius / 5 * 9 + 32;
            return $resultFahrnheit;
        }

        function fNaC ($argFahrenheit) {
            //Deduct 32, then multiply by 5, then divide by 9
            $resultCelsius = ($argFahrenheit - 32) * 5 / 9;
            return $resultCelsius;   
        }


        echo cNaF(0); //32
        echo "<br>";
        echo fNaC(32); //0
        echo "<br>";
        echo cNaF(-40); //-40
        echo "<br>";
        echo fNaC(-40); //-40


    ?>
    
</body>
</html>