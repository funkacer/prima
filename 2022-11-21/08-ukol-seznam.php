<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úkol seznam</title>
</head>
<body>
    <h1>Úkol seznam</h1>

    <?php
    $prvniMisto = "Pepa";
    $druheMisto = "Kuba";
    $tretiMisto = "David";

    ?>

    <ol>
        <li><?php echo $prvniMisto; ?></li>
        <li><?php echo $druheMisto; ?></li>
        <li><?php echo $tretiMisto; ?></li>
    </ol>

    <table border = "1" cellspacing = "0" cellpadding = "5">
        <tr>
            <td>1.</td>
            <td><?php echo $prvniMisto; ?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td><?php echo $druheMisto; ?></td>
        </tr>
        <tr>
            <td>3.</td>
            <td><?php echo $tretiMisto; ?></td>
        </tr>
    </table>
    
</body>
</html>