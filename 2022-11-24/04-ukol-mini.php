<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Mini</title>
</head>
<body>
    <h1>Úkol Mini</h1>

    <?php
        //vytvrote tabulku kde bude 1 sloupec 15 radku
        //v radcich bude postupne A, AA, AAA, AAAA, ...

        echo "<table border = '1'>";

        $textAcka = "A";
        for ($i=0; $i < 15; $i++) {
            //$text = str_repeat("A", $i+1);
            
            echo "<tr>";
            echo "<td>$textAcka</td>";
            echo "</tr>";
            $textAcka .= "A";

        }

        echo "</table>";

    ?>
    
</body>
</html>