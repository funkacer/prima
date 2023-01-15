<?php
    if (array_key_exists("heslo-submit", $_POST)) {
        $heslo = $_POST["heslo"];
        echo $heslo;
        echo "<br>";
        $hashHesla = password_hash($heslo, PASSWORD_BCRYPT, ["cost" => 8]);
        echo $hashHesla;
        //toto je hash hesla kočka
        $hesloUlozeneVDatabazi = '$2y$08$wVXD0DAAtPzm24XilwXmg.s1VMW2DeSXq8i2Z3undvsemFkh5buaq';
        var_dump(password_verify($heslo, $hesloUlozeneVDatabazi));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesla</title>
</head>
<body>
    <h1>Hesla</h1>

    <form action="" method="post">
        <label for="aaa">Vaše heslo</label>
        <input type="password" name="heslo" id="aaa">
        <input type="submit" name = "heslo-submit" value="Ověřit">

    </form>
    
</body>
</html>