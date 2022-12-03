<?php

    session_start();

    class Fixa {

        public $barva;
        public $maxKapacita;
        public $aktualniInkoust;

        function __construct ($argBarva, $argMaxKapacita, $argAktualniInkoust) {
            $this->barva = $argBarva;
            $this->maxKapacita = $argMaxKapacita;
            $this->aktualniInkoust = $argAktualniInkoust;
        }

        function naplnSe($argInkoust) {
            $this->aktualniInkoust += $argInkoust;
            if ($this->aktualniInkoust > $this->maxKapacita) {
                $this->aktualniInkoust = $this->maxKapacita;
            }
        }

        function napis($argText) {
            $delka = mb_strlen($argText);
            $spotreba = $delka * 4;

            if ($this->aktualniInkoust < $spotreba) {
                return "Není dost inkoustu";
            } else {
                $this->aktualniInkoust -= $spotreba;
                return "<div class='$this->barva'>$argText</div>";
            }

        }

    }

    if (!array_key_exists("instanceFix", $_SESSION)) {
        $_SESSION["instanceFix"] = [];

        $_SESSION["instanceFix"]["blue"] = new Fixa("blue", 120, 120);
        $_SESSION["instanceFix"]["red"] = new Fixa("red", 60, 60);
        $_SESSION["instanceFix"]["black"] = new Fixa("black", 105, 105);
        $_SESSION["instanceFix"]["green"] = new Fixa("green", 85, 85);


    }

    $vysledek = "";
    if (array_key_exists("fixa-submit", $_POST)) {
        $barvaFixy = $_POST["barva-fixy"];
        $textUzivatele = $_POST["text-uzivatele"];
        $vysledek = $_SESSION["instanceFix"][$barvaFixy]->napis($textUzivatele);
    }

    if (array_key_exists("naplnit-submit", $_POST)) {
        $barvaFixy = $_POST["barva-fixy"];
        $_SESSION["instanceFix"][$barvaFixy]->naplnSe(20);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Fixy</title>
    <link rel="stylesheet" href="./css/style05.css">
</head>
<body>
    <h1>Úkol Fixy</h1>


    <form action="" method="post">
        <label for="s">Vyberte</label>
        <select name="barva-fixy" id="s">
            <?php
                foreach ($_SESSION["instanceFix"] as $Fixa) {
                    $selected = "";
                    if ($Fixa->barva == $barvaFixy) {
                        $selected = "selected";
                    }
                    echo "<option value='$Fixa->barva' $selected>$Fixa->barva</option>" ;
                }
            ?>

        </select>
        <label for="t">Zadejte text</label>
        <input type="text" name="text-uzivatele" id="t">
        <input type="submit" name="fixa-submit" value="Napsat">
        <input type="submit" name="naplnit-submit" value="Naplnit">
    </form>

    <br />

    <?php
        if (isset($vysledek)) {
            echo $vysledek;
        }

        echo "<br />";

        // doplnit výpis stavu inkoustu
        echo "<ul>";
        foreach ($_SESSION["instanceFix"] as $Fixa) {
            echo "<li>Fixa $Fixa->barva má $Fixa->aktualniInkoust inkoustu.</li>";
        }
        echo "</ul>";
    ?>

    
</body>
</html>