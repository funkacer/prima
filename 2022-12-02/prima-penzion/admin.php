<?php

    session_start();

    require_once "./data.php";

    //zpracujeme přihlašovací formulář
    if (array_key_exists("login-submit", $_POST)){
        $zadanyUsername = $_POST["username"];
        $zadaneHeslo = $_POST["password"];

        //kontrolujeme přihlašovací údaje
        if ($zadanyUsername == "admin" && $zadaneHeslo == "papousek123") {
            //pokud OK, do session klíč "prihlasen"
            $_SESSION["prihlasen"] = true;
        }
    }

    //zoracujem logout
    if (array_key_exists("logout-submit", $_GET)) {
        unset($_SESSION["prihlasen"]);
        //vycistit url
        header("Location: ?");
    }

    if (array_key_exists("prihlasen", $_SESSION)) {
        //toto je blok kodu ktery se provede jen kdyz je uzivatel prihlasen

        //uživatel chce editovat stránku
        if (array_key_exists("edit", $_GET)) {
            $idStranky = $_GET["edit"];
            $aktualniInstance = $seznamStranek[$idStranky];
            //var_dump($aktualniInstance);

            //zpracujeme aktualizovat-submit
            if (array_key_exists("aktualizovat-submit", $_POST)) {
                $novyObsahStranky = $_POST["obsah-stranky"];
                $aktualniInstance->setObsah($novyObsahStranky);
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrace</title>
</head>
<body>
    <h1>Administrace</h1>

    <?php
        if (array_key_exists("prihlasen", $_SESSION)) {
            echo "Jste přihlášen<br>";
            echo "<a href='?logout-submit=yes'>Odhlasit se</a>";

            echo "<ul>";
                foreach($seznamStranek as $instance) {
                    echo "<li> <a href = '?edit={$instance->getId()}'>{$instance->getId()}</a></li>";
                }
            echo "</ul>";
            
        } else {
            ?>
                <form action="" method="post">
                    <label for="a">Jmeno</label>
                    <input type="text" name="username" id="a">
                    <label for="b">Heslo</label>
                    <input type="password" name="password" id="b">

                    <input type="submit" name="login-submit" value="Prihlasit se">
                </form>
            <?php
        }

        if (isset($aktualniInstance)) {
            ?>

            <form action="" method="post">
                <label for="hroch">WYSIWYG editor</label>
                <br>
                <textarea name="obsah-stranky" id="hroch" cols="100" rows="20"><?php echo htmlspecialchars($aktualniInstance->getObsah()); ?></textarea>
                <br>
                <input type="submit" name="aktualizovat-submit" value="Aktualizovat">
            </form>

            <?php
            echo "<br>";

            //composer require tinymce/tinymce 5.10.6
            
            /*
            if (isset($novyObsahStranky)) {
                echo $novyObsahStranky;
            }
            */
        }           
    ?>

    <!-- composer require tinymce/tinymce 5.10.6 -->
    <!-- composer require primakurzy/responsivefilemanager -->
    <!-- zkopírovat složku upload do prima-penzion -->

    <!-- zde jsme připojili knihovnu tinymce -->
    <script src="./vendor/tinymce/tinymce/tinymce.js"></script>
    <!-- nyní musíme knihovnu tinymce spustit -->
    <script>
        tinymce.init({
            selector: "#hroch",
            language: "cs",
            language_url: "<?php echo dirname($_SERVER["PHP_SELF"]); ?>/vendor",
            entity_encoding: "raw",
            verify_html: false,
            content_css: ["./css/style.css", "./css/all.min.css"],
            body_id: "obsah",
            plugins:["code", "responsivefilemanager", "image", "anchor", "autolink", "autoresize", "link", "media", "lists"],
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
            external_plugins: {
                'responsivefilemanager': '<?php echo dirname($_SERVER['PHP_SELF']); ?>/vendor/primakurzy/responsivefilemanager/tinymce/plugins/responsivefilemanager/plugin.min.js',
            },
            external_filemanager_path: "<?php echo dirname($_SERVER['PHP_SELF']); ?>/vendor/primakurzy/responsivefilemanager/filemanager/",
            filemanager_title: "File manager",
        });
    </script>

</body>
</html>