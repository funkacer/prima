<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol extra funkce</title>
</head>
<body>
    <h1>Úkol extra funkce</h1>

    <?php

        function vypisTabulku ($argData) {

            $tabulka = "<table border = '1'>";
            foreach ($argData as $row) {
                $tabulka .= "<tr>";
                foreach ($row as $col) {
                    $tabulka .= "<td>$col</td>";
                }
                $tabulka .= "</tr>";
            }

            $tabulka .= "</table>";

            echo $tabulka;
        }


        vypisTabulku(
            [
                ["koza", 4],
                ["had", 0],
                ["kocka", 3]
            ]
        );

        echo "<br />";
        vypisTabulku(
            [
                ["ceska republika", "praha", 1000000],
                ["nemecko", "berlin", 254545454],
                ["rusko", "moskva", 2515484841]
            ]
        );

    ?>
    
</body>
</html>