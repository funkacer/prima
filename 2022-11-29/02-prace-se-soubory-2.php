<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práce se soubory 2</title>
</head>
<body>
    <h1>Práce se soubory 2</h1>

    <?php


        //file_exists zjistí, zda existuje soubor nebo adresář
        var_dump(file_exists("./soubory/soubor.txt"));
        var_dump(file_exists("./soubory/emaily.txt"));
        var_dump(file_exists("./obrazky"));

        //mkdir vytvoří adresář
        //mkdir("./fonty");  //vytvoří se mi složka fonty
        //pokud již exisatuje, vyhodí chybu
        if (!file_exists("./fonty")) {
            mkdir("./fonty");
        }

        var_dump(is_file("./soubory/emaily.txt")); //true
        var_dump(is_file("./soubory")); //false
        var_dump(is_dir("./soubory/emaily.txt")); //false
        var_dump(is_dir("./soubory")); //true

        //rename přejmenuje soubor nebo složku
        if (!file_exists("./fonts")) {
            rename("./fonty", "./fonts");
        }
        //když fonts existuje, vyhodí chybu

        //funkce rename se používí i pro přesouvání
        if (!file_exists("./soubory/fonts")) {
        rename("./fonts", "./soubory/fonts");
        }

        //scandir nám vypíše všechny soubory a složky dané složky
        //prací pole jmen souborů a složek
        $poleJmenSouboruASlozek = scandir("./");
        var_dump($poleJmenSouboruASlozek);
        // ./ znamená aktuální složka
        // ../znamená rodičovská složka
        //většinou se chceme těmto dvěma položkám vyhnout

        foreach ($poleJmenSouboruASlozek as $jmeno) {
            if ($jmeno != "." && $jmeno != "..") {
                echo $jmeno."<br>";
            }
        }

        
        file_put_contents("./soubory/fonts/aaa.txt", "");
        //rmdir smaže složky, ale musí být prázdné
        rmdir("./soubory/fonts");

        //unlink smaže soubor
        $poleJmenSouboruASlozek = scandir("./soubory/fonts");
        foreach ($poleJmenSouboruASlozek as $jmeno) {
            if ($jmeno != "." && $jmeno != "..") {
                echo "Smažu: ".$jmeno."<br>";
                unlink("./soubory/fonts/$jmeno");
            }
        }

        //teď už to jde
        echo "Smažu ./soubory/fonts";
        rmdir("./soubory/fonts");

    ?>
    
</body>
</html>