<?php

if (array_key_exists("produkt-submit", $_POST)) {
    $produkt = $_POST["produkt"];

    //toto není bezpečné, protože lze zadat vlastní příkazy, např. --; SELECT * FROM ucty;
    //PDO ale pozná a oescapuje tento útok a vrátí chybu
    $SQL = "SELECT * FROM produkt WHERE id=$produkt";
}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL injection</title>
</head>
<body>
    <h1>SQL injection</h1>

    <p>Pokud používáme PDO, jsme automaticky chráněni</p>

    <form action="" method="post">
        <label for="aaa">Jmeno produktu</label>
        <input type="text" name="produkt" id="aaa">

        <input type="submit" value="Vyhledat">
    </form>
    
</body>
</html>