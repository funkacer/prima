<?php

    //tneot prikaz stejne jako set cookie musi byt zavolan driv nez jakekoliv HTML
    session_start();

    //tatot promenna a vsechna data ktera do ni ulozime se nam neztrati ani por fresreshi nebo kdyz nekdo stranku zavre
    var_dump($_SESSION);
    //tato promenna session se vynuluje az kdyz se cely prohlizec zavre

    //pracujeme s tim jako kdyby to bylo obycejne pole
    $_SESSION["oblibenaBarva"] = "hotpink"; 

    if (array_key_exists("barva-submit", $_POST)) {
        $barva = $_POST["barva"];
        //pracujeme s tim jako kdyby to bylo obycejne pole
        $_SESSION["oblibenaBarva"] = $barva; 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>Session</h1>

    <form action="" method="post">
        <label for="aaa">Oblibena barva:</label>
        <input type="text" name="barva" id="aaa">

        <input type="submit" name="barva-submit" value="Pamatovat si barvu">
    </form>

    <a href="https://primakurzy.cz">kurzy</a>

    
</body>
</html>