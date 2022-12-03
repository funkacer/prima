<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stringy</title>
</head>
<body>
    <h1>Stringy</h1>

    <?php
        $text = "Dneska je pondělí a venku je 6 stupňů.";
        //tato funkce zjistí kolik znaků string má
        //háčky a čárky se počítají jako samostatný znak
        //pokud chceme, aby se počítalo í jako jeden znak, použijeme mb verzi funkce
        //mb = multibajt
        //strlen = string length
        echo strlen($text); //42
        echo "<br />";
        echo mb_strlen($text); //38
        echo "<br />";

        //template string a lepení

        //templatovani funguje od verze php 7
        $jmeno = "Pepa";
        $kredity = 400;
        $templateString = "Uživatel $jmeno má na kontě $kredity kreditů.";
        echo $templateString;
        echo "<br />";

        //lepení je starý způsob
        $slepenyString = "Uživatel ".$jmeno." má na kontě ".$kredity." kreditů.";
        echo $slepenyString;
        echo "<br />";

        //TEMPLATOVÁNÍ NEFUNGUJE PRO STRINGY OBALENÉ APOSTROFEM!!!
        $templateString = 'Uživatel $jmeno má na kontě $kredity kreditů.';
        echo $templateString;


    ?>
</body>
</html>