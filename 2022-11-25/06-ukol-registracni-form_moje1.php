<?php

    //var_dump($_POST);
    
    $formularOk = false;

    if (array_key_exists("submit", $_POST)) {

        //kontrola údajů
        //echo "<h2>SUBMIT</h2>";

        $jmeno = $_POST["jmeno"];
        $vek = $_POST["vek"];
        $pohlavi = $_POST["pohlavi"];

        if (isset($jmeno) && is_numeric($vek) && isset($pohlavi)) {
            if (strlen($jmeno) >= 3 && $vek >= 18 && $pohlavi == "zena"){
                $formularOk = true;
            }
        }

    }

    if (array_key_exists("zpet", $_POST)) {
        //echo "<h2>ZPET</h2>";
        $formularOk = false;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Registrační formulář</title>
</head>
<body>

    <?php
        if ($formularOk) {
            echo "<h1>Registrace proběhla úspěšně</h1>";
            echo "<table border = '1'>";
            echo "<tr> <td> <b>Jméno</b> </td> <td> $jmeno </td> </tr>";
            echo "<tr> <td> <b>Věk</b> </td> <td> $vek </td> </tr>";
            echo "<tr> <td> <b>Pohlaví</b> </td> <td> $pohlavi </td> </tr>";
            echo "</table>";
            echo "<br />";
            echo "<form method='post'> <input type = 'submit' name = 'zpet' value = 'Zpět' /> </form>";
        }
    ?>
    
    <form action="" method="post" <?php if ($formularOk) {echo "style = 'visibility: hidden'";} ?> >

        <label for="jmeno">Jméno</label>
        <input type="text" name="jmeno" id="jmeno" <?php if (isset($jmeno)) {echo "value = $jmeno";} ?> >
        <?php if (isset($jmeno)) {
            if (strlen($jmeno) == 0) {
                echo "<p style = 'display:inline; color:red'>Musí být vyplněno.</p>";
            } else if (strlen($jmeno) < 3) {
                echo "<p style = 'display:inline; color:red'>Příliš krátké jméno.</p>";
            }
        }?>
        <br><br>
        <label for="vek">Věk</label>
        <input type="text" name="vek" id="vek" <?php if (isset($vek)) {echo "value = $vek";} ?> >
        <?php if (isset($vek)) {
            if (!is_numeric($vek)) {
                echo "<p style = 'display:inline; color:red'>Musí být vyplněno.</p>";
            } else if ($vek < 18) {
                echo "<p style = 'display:inline; color:red'>Pouze pro dospělé.</p>";
            }
        }?>
        <br><br>
        <label for="pohlavi">Pohlaví</label>
        <select name="pohlavi" id="pohlavi">
            <option value="vyber">Vyber</option>
            <option value="muz" <?php if (isset($pohlavi)) {if ($pohlavi == "muz") {echo "selected";}} ?>>Muž</option>
            <option value="zena" <?php if (isset($pohlavi)) {if ($pohlavi == "zena") {echo "selected";}} ?>>Žena</option>
            <option value="jine" <?php if (isset($pohlavi)) {if ($pohlavi == "jine") {echo "selected";}} ?>>Jiné</option>
        </select>
        <?php if (isset($pohlavi)) {
            if ($pohlavi != "muz" && $pohlavi != "zena" && $pohlavi != "jine") {
                echo "<p style = 'display:inline; color:red'>Musíte si zvolit pohlaví.</p>";
            } else if ($pohlavi != "zena") {
                echo "<p style = 'display:inline; color:red'>Registrace pouze pro ženy.</p>";
            }
        }?>
        <br><br>
        <input type="submit" name = "submit" value="Zaregistrovat">

    </form>


</body>
</html>