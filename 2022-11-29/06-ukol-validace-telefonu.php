<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Validace telefonu</title>
</head>
<body>
    <h1>Úkol Validace telefonu</h1>

    <?php

        $regualniVyraz = "/^(\+420)?(-| |\/)?[1-9]{1}[0-9]{2} ?[0-9]{3} ?[0-9]{3}$/";
        var_dump(preg_match($regualniVyraz, "+420777123456")); //true
        var_dump(preg_match($regualniVyraz, "777123456")); //true
        var_dump(preg_match($regualniVyraz, "+420-777123456")); //true
        var_dump(preg_match($regualniVyraz, "777 123 456")); //true
        var_dump(preg_match($regualniVyraz, "+420 777 123 456")); //true
        var_dump(preg_match($regualniVyraz, "+420/777123456")); //true
        var_dump(preg_match($regualniVyraz, "kocka")); //false
        var_dump(preg_match($regualniVyraz, "077123456")); //false
        var_dump(preg_match($regualniVyraz, "77712345")); //false
        var_dump(preg_match($regualniVyraz, "+777123456")); //false
        var_dump(preg_match($regualniVyraz, "+420123456")); //false

    ?>
</body>
</html>