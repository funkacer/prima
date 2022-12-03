<?php

    //!!! setcookie musí proběhnout dříve než jakékoliv html vč. echo ani var_damp ani jen mezera!!!

    //příkaz pro uživatele, aby si vytvořil cookie
    //jméno, hodnota, expirace (s) - time() + 60*60*24 = den * počet dnů
    setcookie("preferovanyJazyk", "CZE", time() + 60*60*24*7);
    //echo time();

    //hodnota se mění stejnou funkcí
    setcookie("preferovanyJazyk", "FR", time() + 60*60*24*7);

    var_dump($_COOKIE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Cookies</h1>

    <?php
        if (array_key_exists("preferovanyJazyk", $_COOKIE)) {
            echo "Váš preferovaný jazyk je {$_COOKIE["preferovanyJazyk"]}.";
        }
        
        phpinfo();
    ?>
    
</body>
</html>