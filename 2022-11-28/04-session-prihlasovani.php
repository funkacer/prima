<?php

    //nastartujeme session
    session_start();

    //zpracujeme prihlasovaci formular
    if (array_key_exists("prihlaseni-submit", $_POST)) {
        //vytáhneme z portu zadané jméno a heslo
        $zadaneJmeno = $_POST["prihlasovaci-jmeno"];
        $zadaneHeslo = $_POST["prihlasovaci-heslo"];

        //porovnáme s databází, uložíme do session
        if ($zadaneJmeno == "admin" && $zadaneHeslo == "papousek123") {
            $_SESSION["prihlasen"] = true;
        }
    }

    //zpracujeme odhlasovaci formular
    if (array_key_exists("odhlaseni-submit", $_GET)) {
        //tim ze ostraníme hodnotu ze session tak ho odhlásíme
        unset($_SESSION["prihlasen"]);
        header("Location: ?");
    }

    //POZOR!!! v url zustane
    //http://localhost/jirka/2022-11-28/04-session-prihlasovani.php?odhlaseni-submit=Odhl%C3%A1sit+se

    //musíme vyčistit url po odhlášení

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přihlašování</title>
</head>
<body>
    <h1>Přihlašování</h1>

    <?php
        //podle klíče v session zjistíme zda přihlášen nebo zobrazit formulář
        if(array_key_exists("prihlasen", $_SESSION)) {
            echo "Jste prihlasen";?>
            <br /><br />
            <!-- odhlášení pomocí formuláře GET -->
            <form action="" method="get">
                <input type="submit" name="odhlaseni-submit" value="Odhlásit se">
            </form>
            <!-- toto nasimuluje GET formulář a chová se stejně jako button:submit, ale lze lépe stylovat-->
            <a href="?odhlaseni-submit=cokoliv">Odhlásit se</a>
        <?php
        } else {
            ?>
                <form action="" method="post">

                <label for="jedna">Jméno</label>
                <input type="text" name="prihlasovaci-jmeno" id="jedna">

                <label for="dva">Heslo</label>
                <input type="password" name="prihlasovaci-heslo" id="dva">

                <input type="submit" name = "prihlaseni-submit" value="Prihlasit se">

                </form>
            <?php
        }

    ?>
    
</body>
</html>