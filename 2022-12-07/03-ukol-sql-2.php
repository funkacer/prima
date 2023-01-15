<?php
    $instanceDb = new PDO(
        "mysql:host=localhost;dbname=primakurzy;charset=utf8",
        "root",
        "",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );

    if (array_key_exists("poslat-submit", $_POST)) {
        $odesilatelCislo = $_POST["odesilatel-cislo"];
        $adresatCislo = $_POST["adresat-cislo"];
        $castka =  $_POST["castka"];

        $prikaz = $instanceDb->prepare("SELECT stav_konta FROM bankovni_ucet WHERE cislo_uctu = ?");
        $prikaz->execute([$odesilatelCislo]);
        $odesilatelStav = ($prikaz->fetchAll());

        $prikaz = $instanceDb->prepare("SELECT stav_konta FROM bankovni_ucet WHERE cislo_uctu = ?");
        $prikaz->execute([$adresatCislo]);
        $adresatStav = ($prikaz->fetchAll());

        if ($adresatStav != null) {

            if ($odesilatelStav != null) {
                $odesilatelStav = $odesilatelStav[0]["stav_konta"];

                //var_dump($odesilatelStav);

                if (is_numeric($castka)) {
                    $odesilatelStav -= $castka;

                    if ($odesilatelStav < 0) {
                        echo "<span style='color: #ba372a; font-weight: bold;'>Transakci nelze provést!</span>";
                    } else {
                        //tady je vše OK
                        $prikaz = $instanceDb->prepare("START TRANSACTION;");
                        $prikaz->execute();

                        $prikaz = $instanceDb->prepare("UPDATE bankovni_ucet SET stav_konta = stav_konta - ? WHERE cislo_uctu = ?;");
                        $prikaz->execute([$castka, $odesilatelCislo]);
                
                        $prikaz = $instanceDb->prepare("UPDATE bankovni_ucet SET stav_konta = stav_konta + ? WHERE cislo_uctu = ?;");
                        $prikaz->execute([$castka, $adresatCislo]);

                        $prikaz = $instanceDb->prepare("COMMIT;");
                        $prikaz->execute();
                    }
                } else {
                    echo "<span style='color: #ba372a; font-weight: bold;'>Chybí částka!</span>";
                }
            } else {
                echo "<span style='color: #ba372a; font-weight: bold;'>Neznámý stav odesílatele!</span>";
            }
        } else {
            echo "<span style='color: #ba372a; font-weight: bold;'>Neznámý stav příjemce!</span>";
        }
    }

    //nemusite resit transakce, ani jeslti je na ucte dost penez

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bankovni ucet posilani penez</title>
</head>
<body>
    <h1>Posilani Penez</h1>

    <!-- TODO: lze čísla účtů jako SELECT -->
    <form action="" method="post">
        <label for="a">Cislo uctu odesilate</label>
        <input type="text" name="odesilatel-cislo" id="a">
        <hr>
        <label for="b">Cislo uctu adresata</label>
        <input type="text" name="adresat-cislo" id="b">
        <hr>
        <label for="c">Castka</label>
        <input type="text" name="castka" id="c">
        <hr>
        <input type="submit" name="poslat-submit" value="Poslat penize">
    </form>

    <!-- TODO: udělat jako tabulku -->
    <?php
        $prikaz = $instanceDb->prepare("SELECT * FROM bankovni_ucet");
        $prikaz->execute([]);
        $poleUctu = $prikaz->fetchAll();

        echo "<ul>";
        foreach ($poleUctu AS $ucet) {
            echo "<li>{$ucet["cislo_uctu"]} : {$ucet["majitel"]} : {$ucet["stav_konta"]}</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>