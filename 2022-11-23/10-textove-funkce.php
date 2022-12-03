<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textové funkce</title>
</head>
<body>
    <h1>Textové funkce</h1>

    <?php

        //strtolower převede všechny písmena na malá, ale jen bez diakritiky
        $origText = "Dneska je stŘeda a Tony musí poslat dopisy.";
        echo strtolower($origText);
        echo "<br />";
        //toto se užívá při převedení odpovědí uživatelů před porovnáváním
        echo mb_strtolower($origText);
        echo "<br />";

        $email = "   a@b.cz  ";
        //trim dá pryč mezery za i před textem
        echo "_".trim($email)."_";
        echo "<br />";
        //uživatel často mezery nevidí!!!

        //strlen, mb_strlen zjistí délku stringu
        echo strlen($origText);
        echo "<br />";
        echo mb_strlen($origText);
        echo "<br />";

        //explode rozseka string a vrátí pole
        //první param je oddělovač, druhý param je text
        var_dump(explode(" ", $origText));

        //co kdyz vstup neni standardizovany a obcas nekde mezer prebyva ne
        $seznamVeci = "mleko , mouka,cukr, vajicko";
        $strBezMezer = str_replace(" ", "", $seznamVeci);
        $poleVeci = explode(",", $strBezMezer);
        var_dump($poleVeci);

        //naučit se regulární výrazy
        //co když jedna ingredience bude mít mezeru
        $seznamVeci = "mleko , hladká mouka,cukr, vajicko";
        $poleVeci = explode(",", $seznamVeci);
        for ($i = 0; $i < count($poleVeci); $i++) {
            $poleVeci[$i] = trim($poleVeci[$i]);
        }
        var_dump($poleVeci);

        //implode dělá přesný opak explodu
        //bere pole a vrátí string
        $poleZviratek = ["veverka", "slon", "tucnak"];
        echo implode(" | ", $poleZviratek);
        echo "<br />";

        //substr je funkce která vyoperuje ven část stringu
        //mb_substr pro češtinu (jinak by se musely žšč počítat jako 2 znaky)
        //text, od, kolik znaků
        $text = "Tony žije ve městě.";
        echo mb_substr($text, 5, 4);
        echo "<br />";

        //strpos najde text v textu
        echo strpos($text, "žije");
        echo "<br />";

        //strstr najde začátek textu a vrátí zbytek
        echo strstr($text, "žije");
        echo "<br />";

    ?>
    
</body>
</html>