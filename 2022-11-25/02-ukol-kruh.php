<?php

//var_dump($_GET);

//null je dobré nadefinovat pokud budu proměnnou používat třeba v databázi
//$obvod = null;

if (array_key_exists("submit", $_GET)) {
    //echo "Odeslal";
    
    $polomer = str_replace(",", ".", $_GET["polomer"]);
    if (is_numeric($polomer)) {
        $obvod = number_format(2 * pi() * $polomer, 2, ",");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Kruh formulář</title>
</head>
<body>
    <h1>Úkol Kruh formulář</h1>

    <form method="get">

        <label for="polomer">Zadejte poloměr kruhu:</label>
        <input type="text" name="polomer" id="polomer">
        <input type="submit" name = "submit" value="Spočítat obvod">
        <br />

    </form>

    <?php

        //if (!is_null($obvod)) {
        if (isset($obvod)) {
            echo "<h2>Obvod kruhu je: $obvod.</h2>";
        } else {
            echo "<h2>Zadejte prosím číslo.</h2>";
        }

    ?>

</body>
</html>