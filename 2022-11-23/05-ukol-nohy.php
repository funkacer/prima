<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol Nohy</title>
</head>
<body>
    <h1>Úkol Nohy</h1>

    <?php

        $poleZviratkaNohy = [
            "pes" => 4,
            "kocka" => 4,
            "slepice" => 2,
            "uzovka" => 0,
        ];

        echo "<table border = '1' cellpadding = '5'cellspacing = '0'>";
        foreach ($poleZviratkaNohy AS $zvire => $nohy) {
            echo "<tr>
                <td>$zvire</td>
                <td>$nohy</td>
            </tr>";
        }
        echo "</table>";

    ?>
    
</body>
</html>