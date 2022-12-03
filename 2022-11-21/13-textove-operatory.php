<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textové operátory</title>
</head>
<body>
    <h1>Textové operátory</h1>

    <?php

        //. slepuje, ale nemění
        $jmeno = "Jirka";
        echo $jmeno." Černý"; //Jirka Černý
        echo "<br />";
        echo $jmeno; //Jirka
        echo "<br />";

        //.= připojí text k proměnné
        $jmeno .= " Černý";
        echo $jmeno; //Jirka Černý
        echo "<br />";

        echo "6" + "4"; //10
        echo "<br />";
        //echo "6" + "klokan"; //vrátí chybu
        echo "6"."4"; //64




    ?>
    
</body>
</html>