<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porovnávací operátory</title>
</head>
<body>
    <h1>Porovnávací operátory</h1>

    <?php

        $cislo = 5;
        echo $cislo == 5; //vypíše 1
        echo $cislo > 5; //nevypíše nic
        echo "<br />";

        //boolean může mít hodnotu true nebo false
        $jePlnolety = true;
        echo $jePlnolety;; //vypíše 1
        $jePlnolety = false;
        echo $jePlnolety; //nevypíše nic

        //booleany nebudeme vypisovat echem, protože se to chová divně

        var_dump($jePlnolety);

        //výsledkem každé porovnávací operace je boolean
        var_dump("Jirka" == "Jirka"); //true
        var_dump("jirka" == "Jirka"); //false
        //PHP je case sensitive, záleží na velkých a melých písmenech
        $prihlasenyUzivatel = "Pepa";
        var_dump($prihlasenyUzivatel == "Jirka"); //false

        //používíme i pro čísla
        var_dump(5 == 5); //true
        var_dump(5 == 3 + 2); //true
        var_dump(5 == 3 + 3); //false

        //menší a větší
        var_dump(3 + 5 > 4); //true
        var_dump(3 + 5 > 10); //false
        var_dump(3 + 5 > 8); //false
        var_dump(3 + 5 >= 8); //true
        var_dump(3 + 5 <= 8); //true
        // nelze var_dump(3 + 5 => 8)

        //nerovná se
        var_dump(3 + 5 != 9); //true
        var_dump(3 + 5 != 8); //false
        $host = "Pepa";
        var_dump($host != "Jirka"); //true
        var_dump($host != "pepa"); //true
        var_dump($host != "Pepa"); //false
    
    ?>
    
</body>
</html>