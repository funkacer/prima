<?php
    if (array_key_exists("submit-text", $_POST)) {
        $text = $_POST["text"];
        //echo $text;

        file_put_contents("./soubory/text.txt", $text);
    }

    if (array_key_exists("submit-smazat", $_POST)) {
        if (file_exists("./soubory/text.txt")) {
            unlink("./soubory/text.txt");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol WYSIWYG</title>
</head>
<body>
    <h1>Úkol WYSIWYG</h1>

    <!-- What You See Is What You Get -->

    <?php
        $text = "";
        if (file_exists("./soubory/text.txt")) {
            $text = file_get_contents("./soubory/text.txt");
            //echo $text;
        }
    ?>

    <form action="" method="post">
        <textarea name="text" id="aaa" cols="30" rows="10" placeholder="Soubor ještě neexistuje..."><?php echo $text; ?></textarea>
        <br>
        <input type="submit" name="submit-text" value="Uložit">
    </form>

    <br>

    <form action="" method="post">
        <input type="submit" name="submit-smazat" value="Smazat">
    </form>

    <?php echo $text; ?>

    <!-- toto je CDN okdaz na nejakou knihovnu, ktera lezi na internetu
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.3.0/tinymce.min.js"></script>
    <script>
        //toto je javascriptovy komentar
        tinymce.init({
            selector: '#aaa'
        });
    </script>
     -->
   
</body>
</html>