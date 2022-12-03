<?php

    //var_dump($_POST);
    /*
    if (isset($jmeno)) {
        echo "Jmeno: $jmeno";
    }
    */

    session_start();

    if (array_key_exists("jmeno", $_SESSION)) {
        $jmeno = $_SESSION["jmeno"];
    }

    if (array_key_exists("vek", $_SESSION)) {
        $vek = $_SESSION["vek"];
    }

    if (array_key_exists("pohlavi", $_SESSION)) {
        $pohlavi = $_SESSION["pohlavi"];
    }
    
    $formularOk = false;
    $moznostiPohlavi = [
        "nic" => "Vyberte:",
        "muz" => "Muž",
        "zena" => "Žena",
        "jine" => "Jiné",
    ];
    $jmenoChyba = "";
    $vekChyba = "";
    $pohlaviChyba = "";

    if (array_key_exists("registrace-submit", $_POST)) {

        //kontrola údajů
        //echo "<h2>SUBMIT</h2>";

        $jmeno = $_POST["jmeno"];
        $vek = $_POST["vek"];
        $pohlavi = $_POST["pohlavi"];

        if (isset($jmeno) && is_numeric($vek) && isset($pohlavi)) {
            if (strlen($jmeno) >= 3 && $vek >= 18 && $pohlavi == "zena"){
                $formularOk = true;
                $_SESSION["jmeno"] = $jmeno;
                $_SESSION["vek"] = $vek;
                $_SESSION["pohlavi"] = $pohlavi;
            }
        }

        
        if (isset($jmeno)) {
            if (strlen($jmeno) == 0) {
                $jmenoChyba = "Musí být vyplněno";
            } else if (strlen($jmeno) < 3) {
                $jmenoChyba = "Příliš krátké jméno.";
            }
        }

        if (isset($vek)) {
            if (!is_numeric($vek)) {
                $vekChyba = "Musí být vyplněno.";
            } else if ($vek < 18) {
                $vekChyba = "Pouze pro dospělé.";
            }
        }

        if (isset($pohlavi)) {
            if ($pohlavi != "muz" && $pohlavi != "zena" && $pohlavi != "jine") {
                $pohlaviChyba = "Musíte si zvolit pohlaví.";
            } else if ($pohlavi != "zena") {
                $pohlaviChyba = "Registrace pouze pro ženy.";
            }
        }

    }

    if (array_key_exists("zpet-submit", $_POST)) {
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
    <style>
        p {
            display:inline;
            color:red;
        }
    </style>
</head>
<body>

    <?php
        if (!$formularOk) {
            ?>
            <form action="" method="post">

            <label for="jmeno">Jméno</label>
            <input type="text" name="jmeno" id="jmeno" <?php if (isset($jmeno)) {echo "value = $jmeno";} ?> >
            <?php echo "<p>$jmenoChyba</p>"; ?>
            <br><br>
            <label for="vek">Věk</label>
            <input type="text" name="vek" id="vek" <?php if (isset($vek)) {echo "value = $vek";} ?> >
            <?php echo "<p>$vekChyba</p>"; ?>
            <br><br>
            <label for="pohlavi">Pohlaví</label>
            <select name="pohlavi" id="pohlavi">
                <?php
                    foreach ($moznostiPohlavi as $klic => $hodnota) {
                        $selected = "";
                        if ($klic == $pohlavi) {
                            $selected = "selected";
                        }
                        echo "<option value = $klic $selected>$hodnota</option>";
                    }
                ?>
            </select>
            <?php echo "<p>$pohlaviChyba</p>"; ?>
            <br><br>
            <input type="submit" name = "registrace-submit" value="Zaregistrovat">

            </form>
            
            <?php
        } else {
            ?>
            <h1>Registrace proběhla úspěšně</h1>
            <table border = '1'>
            <tr> <td> <b>Jméno</b> </td> <td> <?php echo $jmeno ?> </td> </tr>
            <tr> <td> <b>Věk</b> </td> <td> <?php echo $vek ?> </td> </tr>
            <tr> <td> <b>Pohlaví</b> </td> <td> <?php echo $moznostiPohlavi[$pohlavi] ?> </td> </tr>
            </table>
            <br />
            <form method='post'> <input type = 'submit' name = 'zpet-submit' value = 'Zpět' /> </form>
            <?php
        }
    ?>
    
    


</body>
</html>