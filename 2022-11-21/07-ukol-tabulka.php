<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol tabulka</title>
</head>
<body>
    <h1>Úkol tabulka</h1>

    <?php
        $vek = 32;
        $pohlavi = "muž";
        echo "
        <table border=\"1\" cellspacing=\"0\" cellpadding=\"5\">
            <tr>
                <td>Věk</td>
                <td>{$vek}let</td>
            </tr>
            <tr>
                <td>Pohlaví</td>
                <td>$pohlavi</td>
            </tr>
        </table>";
    ?>

    <br />

    <!--preferovaný způsob-->
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td>Věk</td>
            <td><?php echo $vek; ?>let</td>
        </tr>
        <tr>
            <td>Pohlaví</td>
            <td><?php echo $pohlavi; ?></td>
        </tr>
    </table>

    <br />

    <?php 

    $tabulka = "
        <table border=\"1\" cellspacing=\"0\" cellpadding=\"5\">
            <tr>
                <td>Věk</td>
                <td>{$vek}let</td>
            </tr>
            <tr>
                <td>Pohlaví</td>
                <td>$pohlavi</td>
            </tr>
        </table>";

    echo $tabulka;
    ?>
    
</body>
</html>