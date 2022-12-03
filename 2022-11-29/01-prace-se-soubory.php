<?php
    if(array_key_exists("email-submit", $_POST)) {
        $email = $_POST["email"];
        //file_put_contents("soubor.txt", $data, FILE_APPEND);
        //tato funkce zapoíše string do souboru
        //2 parametry: cesta k souboru, string
        //pokud soubor neexistuje, tak se vytvoří
        //ale složka se musí napřed vytvořit

        //toto soubor přepíše
        //file_put_contents("./soubory/emaily.txt", $email);

        //toto přidá do souboru
        $email .= "\n";
        file_put_contents("./soubory/emaily.txt", $email, FILE_APPEND);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práce se soubory</title>
</head>
<body>
    <h1>Práce se soubory</h1>

    <form action="" method="post">
        <label for="aaa"></label>
        <input type="text" name="email" id="aaa">
        <input type="submit" name="email-submit" value="Přidat email">
    </form>

    <?php
        $obsah = file_get_contents("./soubory/emaily.txt");
        //zde vidíme že se nám to vrátí jako jeden velký string
        //se stringy se špatně pracuje, je lepší to mít jako pole
        //var_dump($obsah);
        $poleEmailu = explode("\n", $obsah);
        //var_dump($poleEmailu);

        echo "<ul>";
        foreach ($poleEmailu as $email) {
            if ($email != "") {
                echo "<li>$email</li>";
            }
        }
        echo "</ul>";

    ?>
    
</body>
</html>