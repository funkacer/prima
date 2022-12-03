<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkoly Pole</title>
</head>
<body>
    <h1>Úkoly Pole</h1>

    <?php

        $poleZeleniny = [];

        //1) vložit mrkev, celer a cuketu

        $poleZeleniny[] = "mrkev";
        $poleZeleniny[] = "celer";
        $poleZeleniny[] = "cuketa";

        var_dump($poleZeleniny);

        //2) změnit cuketu za bramboru

        $poleZeleniny[count($poleZeleniny)-1] = "brambora";

        var_dump($poleZeleniny);

        //3) prohodit mrkev s celerem

        $temp = $poleZeleniny[0];
        $poleZeleniny[0] = $poleZeleniny[1];
        $poleZeleniny[1] = $temp;

        var_dump($poleZeleniny);

        //4) přidat ještě okurku

        $poleZeleniny[] = "okurka";

        var_dump($poleZeleniny);

        //5) vypsat náhodný prvek z pole

        echo "Náhodný prvek: ".$poleZeleniny[rand(0,count($poleZeleniny)-1)];
        echo "<br />";
        echo "<br />";

        //6) vypsat všechnu zeleninu v poli pod sebe

        echo "Seznam pod sebe:";
        echo "<br />";
        for ($index = 0; $index < count($poleZeleniny); $index++) {
            echo $poleZeleniny[$index];
            echo "<br />";
        }
        echo "<br />";

        echo "Seznam pod sebe:";
        echo "<br />";
        foreach ($poleZeleniny as $zelenina) {
            echo $zelenina;
            echo "<br />";
        }
        
        //7) smazat celer

        //array%serch zkusí najít hodnotu v poli a vrátí index
        //pokud položka neexistuje, vrátí false
        $indexCeleru = array_search("celer", $poleZeleniny);

        var_dump($indexCeleru);

        //pozor jinak smaže index 0 i když slovo nenajde
        //if (gettype($indexCeleru) != "boolean") {
        if (gettype($indexCeleru) == "integer") {
            unset($poleZeleniny[$indexCeleru]);
        }

        //$indexCeleru === true ... kontroluje i datový typ
        if ($indexCeleru !== false) {
            unset($poleZeleniny[$indexCeleru]);
        }

        var_dump($poleZeleniny);

        var_dump("5" == 5); //true
        var_dump("5" === 5); //false

        var_dump("5" != 5); //false
        var_dump("5" !== 5); //true

    ?>
    
</body>
</html>