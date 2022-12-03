<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pole</title>
</head>
<body>
    <h1>Pole</h1>

    <?php
        //array (pole)
        // []
        //prvky jsou oddělené čárkou
        $barevneVarianty = ["růžová", "žlutá", "červená", "bílá", "modrá"];
        $osoba = [123, "Já", true, 1.1, $barevneVarianty, "konec"];

        //práce s poli
        var_dump($osoba);

        //ve var_dump vidíme, že pole jsou indexované od 0!!!
        //index budeme používat pro výpis

        echo $barevneVarianty[3]; //bílá
        echo "<br />";

        echo "Moje oblíbená barva je $barevneVarianty[2] a $barevneVarianty[4].";
        echo "<br />";

        //změna hodnoty
        $barevneVarianty[1] = "Žlutá";
        echo "Moje oblíbená barva je: $barevneVarianty[1].";
        var_dump($barevneVarianty);

        //přidávání nové hodnoty do pole
        //když neuvedeme index, vloží se do nového chlívku
        //všechny nové hodnoty se vkládají na konec pole
        $barevneVarianty[] = "fialová";
        var_dump($barevneVarianty);

        var_dump($osoba);
        echo "Uživatel $osoba[1] má rád {$osoba[4][2]}.";

        //mazání položky z pole (indexy se nemění!)
        unset($barevneVarianty[3]);
        var_dump($barevneVarianty);

        //nová položka nezaplní díru, ale vloží se jako nový prvek
        $barevneVarianty[] = "hnědá";
        var_dump($barevneVarianty);

        $barevneVarianty[3] = "bílá";
        var_dump($barevneVarianty);

        //count je funkce, která zjistí počet položek v poli
        echo "Počet barev: ".count($barevneVarianty);

        //hodnoty v poli mohou být indexovaným klíčem
        //toto je klíčované pole, je vhodné je použít, pokud máme mixované hodnoty
        $lektor = [
            "jmeno" => "Tony",
            "id" => 123,
            "maParkovani" => false,
            "kurzy" => ["backend", "javaskript"],
            "email" => "tonda.truong@primakurzy.cz"
        ];

        var_dump($lektor);

        echo "Lektor id: ".$lektor["id"];

        //když máme číslované pole tak už nejde použít číselný index
        //echo "Lektor id: ".$lektor[1]; //nelze

        //vkládání nové hodnoty
        $lektor["vek"] = 30;

        var_dump($lektor);

    ?>
    
</body>
</html>