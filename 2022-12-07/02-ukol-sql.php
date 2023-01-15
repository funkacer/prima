<?php
    //vytvořte formulář pro vkládání nového majitele bankovního účtu
    //vypište do tabulky všechny klienty, jejich číslo účtu a stav konta

    $instanceDb = new PDO (
        "mysql:host=localhost;dbname=primakurzy;charset=utf8",
        "root",
        "",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );

    if (array_key_exists("ucet-submit", $_POST)) {
        $cisloUctu = $_POST["cislo-uctu"];
        $majitelUctu = $_POST["majitel-uctu"];
        $pocatecniBonus = $_POST["pocatecni-bonus"];

        $prikaz = $instanceDb->prepare("INSERT INTO bankovni_ucet (cislo_uctu, majitel, stav_konta) VALUES (?, ?, ?) ");
        $prikaz->execute([$cisloUctu, $majitelUctu, $pocatecniBonus]);
        //echo "<h2>Hotovo!</h2>";
        
    }

    if (array_key_exists("vymazat-submit", $_POST)) {
        $cisloVymazat = $_POST["vymazat-cislo"];
        $prikaz = $instanceDb->prepare("DELETE FROM bankovni_ucet WHERE cislo_uctu = ?");
        $prikaz->execute([$cisloVymazat]);
        //echo "<h2>Hotovo!</h2>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol SQL</title>
</head>
<body>
    <h1>Úkol SQL</h1>


    <form action="" method="post">
        <label for="cu">Číslo účtu</label>
        <input type="text" name="cislo-uctu" id="cu">
        <hr>
        <label for="mu">Majitel účtu</label>
        <input type="text" name="majitel-uctu" id="mu">
        <hr>
        <label for="pb">Počáteční bonus</label>
        <input type="text" name="pocatecni-bonus" id="pb">
        <hr>
        <input type="submit" name="ucet-submit" value="Vytvořit nový účet">

    </form>

    <br>

    <?php
       
        $prikaz = $instanceDb->prepare("SELECT * FROM bankovni_ucet");
        $prikaz->execute([]);
        $poleRadku = $prikaz->fetchAll();
        echo "<table border = 1>";
        echo "<tr> <th> Účet </th > <th> Jméno </th > <th> Stav </th > <th> Vymazat? </th> </tr>";
        foreach ($poleRadku as $radek) {
            echo "<tr>";
                echo "<td>{$radek["cislo_uctu"]}</td> <td>{$radek["majitel"]}</td> <td>{$radek["stav_konta"]}</td>";
                echo "<td>";
                ?>
                     <form action="" method="post">
                        <input type="hidden" name="vymazat-cislo" value = <?php echo "'{$radek["cislo_uctu"]}'"; ?>>
                        <input type="submit" name="vymazat-submit" value= "Vymazat">
                     </form>
                <?php
                echo "</td>";
                //echo "<td> <a href = '?vymazat={$radek["cislo_uctu"]}' > Vymazat </a> </td>";
            echo "</tr>";
        }
        echo "</table>";
        
        
    ?>


    
</body>
</html>