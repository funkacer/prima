<?php
    //nejprve zjsitime zda uzivatel kliknoul na ano
    if (array_key_exists("cookie-submit", $_POST)) {
        setcookie("cookieSouhlas", "ano", time() + 60*60*24*30);
        //refreshni ihned stránku, aby lišta zmizela
        //tento příkaz přesměruje uživatele na tu samou stránku (= udělá refresh)
        //jinak napíšeme adresu, kam přesměrovat
        header("Location: ?");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Cookie lišta</title>
</head>
<body>
    <h1>Úkol Cookie lišta</h1>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            /* stránka je 4x větší a je možno skrolovat */
            height: 400vh;
        }

        .lista {
            position: fixed;
            background-color: lightcoral;
            width: 100vw;
            margin: 0;
            bottom: 0px;
        }
    </style>

<!-- finta s php a html-->
<?php
    if (!array_key_exists("cookieSouhlas", $_COOKIE)) {
        ?>
        <!--takto lze otevřít v html části i v php-->
        <div class="lista">
            <form action="" method="post">
                <label for="aaa">Souhlasim s cookinama</label>
                <input type="submit" name="cookie-submit" value="Ano" id="aaa">
            </form>
        </div>
        <?php
    }
?>    
</body>
</html>