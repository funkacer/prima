<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break Cyklus</title>
</head>
<body>
    <h1>Break Cyklus</h1>

    <?php
        while (true) {
            $cislo = rand(0, 100);
            echo $cislo;
            echo "<br/>";
            if ($cislo == 42) {
                //příkaz break okamžitě ukončí cyklus
                break;
                echo "tato zpráva se nikdy nevypíše";
            } else {
                //okamžitě pokračuje cyklus bez dalších příkazů
                continue;
                echo "tato zpráva se nikdy nevypíše";
            }
        }
    ?>
    
</body>
</html>