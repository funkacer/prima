<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Malá násobilka</title>
    <style>td {text-align: center}</style>
</head>
<body>
    <h1>Úkol Malá násobilka</h1>

    <?php
        //zde echujeme začátek tabulky
        echo "<table border = '1' cellspacing = '0' cellpadding = '5'>";

        //cyklus pro řádky
        for ($row = 1; $row <= 10; $row++) {
            echo "<tr>";
            //cyklus pro sloupce
            for ($column = 1; $column <= 10; $column++) {
                //první sloupec nebo řádek tučně
                if ($row == 1 || $column == 1) {
                    echo "<td><b>".($row*$column)."</b></td>";
                } else {
                    echo "<td>".($row*$column)."</td>";
                }
            }      
            echo "</tr>";
        }

        echo "</table>";

    ?>
    
</body>
</html>