<?php

    session_start();

    $poleProduktu = [
        "jablko" => "Jablko",
        "mleko" => "Mléko",
        "hladka-mouka" => "Hladká mouka",
        "cokolada" => "Čokoláda",
        "banan" => "Banán"
    ];

    //pokud není, vytvoříme košík v session
    if (!array_key_exists("kosik", $_SESSION)) {
        $_SESSION["kosik"] = [];
    }

    //zpracováváme vkládání do košíku
    if (array_key_exists("pridat-produkt-submit", $_POST)) {
        $vybranyProdukt = $_POST["produkt"];
        //zjistit zda už produkt je
        if (array_key_exists($vybranyProdukt, $_SESSION["kosik"])) {
            //přidáme 1
            $_SESSION["kosik"][$vybranyProdukt] += 1;
        } else {
            //přidáme produkt
            $_SESSION["kosik"][$vybranyProdukt] = 1;
        }
    }

    //zpracujeme form na odebírání produktů
    if (array_key_exists("odebrat", $_GET)) {
        //toto je klíč produktu který chceme odebrat
        $klicProduktu = $_GET["odebrat"];
        if (array_key_exists($klicProduktu, $_SESSION["kosik"])) {
            if ($_SESSION["kosik"]["$klicProduktu"] == 1) {
                //pokud je položka v košíku jen 1x, tak celou položku odstraníme
                unset($_SESSION["kosik"]["$klicProduktu"]);
            } else {
                $_SESSION["kosik"]["$klicProduktu"]--;
            }
        }
        //pročistíme url, "Location: ?" musí být bez mezery před :!!!
        header("Location: ?");
    }

    //var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol eshop</title>
    <link rel="stylesheet" href="./css/all.min.css">
</head>
<body>
    <h1>Úkol eshop</h1>

    <!-- formulář -->
    <form action="" method="post">
        <select name="produkt" id="aaa">
            <?php
                foreach ($poleProduktu AS $klic => $hodnota) {
                    echo "<option value='$klic'>$hodnota</option>";
                }
            ?>
        </select>
        <input type="submit" name = "pridat-produkt-submit" value="Přidat">
    </form>

    <!-- výpis -->
    <ul>
        <?php
            foreach ($_SESSION["kosik"] as $klic => $hodnota) {
                echo "<li>$poleProduktu[$klic] ($hodnota ks) <a href='?odebrat=$klic'>
                <i class='fa-solid fa-square-minus'></i></a></li>";
            }
        ?>
    </ul>
    
</body>
</html>