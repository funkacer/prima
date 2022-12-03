<?php

    require_once "./libmatika.php";

    if (array_key_exists("polomer-submit", $_POST)) {
        $polomer = $_POST["polomer"];

        //funkce z libmatika
        $obsah = spocitejObsah($polomer);
        $obvod = spocitejObvod($polomer);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="" method="post">
        <label for="p">Poloměr</label>
        <input type="text" name="polomer" id="p">
        <input type="submit" name="polomer-submit" value="Vložit poloměr">

    </form>

    <?php
        if (isset($obsah)) {
            echo "Obsah je: $obsah";
        }
        echo "<br />";
        if (isset($obvod)) {
            echo "Obvod je: $obvod";
        }
    ?>

</body>
</html>