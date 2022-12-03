<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logické operátory</title>
</head>
<body>
    <h1>Logické operátory</h1>

    <?php
        //operátor AND
        //&&
        //operátor && vyjde true pouze pokud obě dvě podmínky jsou true
        //porovnává vždy po dvou zleva do prava, pokud někde false tak skončí
        var_dump(5 > 3 - 1 && 9 < 7); //false
        var_dump(5 > 3 - 1 && 9 > 7); //true

        var_dump(false == false && true); //true

        //operátor OR
        //||
        //operátor || vyjde true pokud alespoň jedna strana je true
        var_dump(3 > 1 || 5 > 8); //true
        var_dump(3 < 1 || 5 > 8); //false
        var_dump(3 < 1 || 5 < 8); //true

        var_dump(false == false || false); //true

        var_dump(5 + 5 >= 10 == false || 3 == "kocka"); //false

        //negace
        //operátor ! převrátí hodnotu booleanu
        var_dump(!(6 > 8)); //true

        $uzivatel = "Tony";
        var_dump(!($uzivatel == "Tony") && 5 >= strlen($uzivatel) || strlen("kocka") >= 7 % 3); //true




    ?>
    
</body>
</html>