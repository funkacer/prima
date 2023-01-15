<?php
    //zde musíme říct, kam se budeme připojovat

    $instanceDb = new PDO(
        "mysql:host=localhost;dbname=primakurzy;charset=utf8",
        "root",
        "",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );


    if (array_key_exists("hledat-submit", $_POST)) {
        $kusNazvu = $_POST["zeme-jmeno"];
        $kusNazvu .= "%";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP a SQL</title>
</head>
<body>
    <h1>PHP a SQL</h1>

    <form action="" method="post">
        <label for="t">Zadejte část názvu</label>
        <input type="text" name="zeme-jmeno" id="t">
        <input type="submit" name = "hledat-submit" value="Vyhledat">
    </form>

    <?php
        //musíme připravit SQL příkaz
        //spustit příkaz + parametry
        //vytáhnout data z výsledku, pokud se jedná o SELECT

        if (isset($kusNazvu)) {

            //query
            $prikaz = $instanceDb->prepare("SELECT * FROM zeme WHERE nazev_cesky LIKE ?");
            $prikaz->execute([$kusNazvu]); //počet položek v poli musí odpovídat počtu ? v query
            //parametry se dosadí za otazníky, musíme dodržet pořadí
            //pokud chceme všechny výsledky vytáhnout jako pole, použijeme fetchAll
            $poleRadku = $prikaz->fetchAll();
            //var_dump($poleRadku);
            
            echo "<ul>";
            foreach ($poleRadku as $radek) {
                echo "<li>{$radek["nazev_cesky"]}</li>"; //nutno uzavřít do chlupatých závorek!!!
            }
            echo "</ul>";

        }
 
    ?>
    
</body>
</html>