<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přirovnávací operátory</title>
</head>
<body>
    <h1>Přirovnávací operátory</h1>

    <?php
        $score = 0;
        echo $score; //0
        echo "<br />";

        //increment o 1;
        $score++;
        echo $score; //1
        echo "<br />";

        $score++;
        $score++;
        $score++;
        $score++;
        $score++;
        echo $score; //6
        echo "<br />";

        //decrementace
        $score--;
        $score--;
        echo $score; //4
        echo "<br />";

        $score += 34;
        echo $score; //38
        echo "<br />";

        $score -= 20;
        echo $score; //18
        echo "<br />";

        $score *= 2;
        echo $score; //36
        echo "<br />";

        $score /= 2;
        echo $score; //18
        echo "<br />";

        //alternativní zápis
        $score = $score + 50;
        echo $score; //68
        echo "<br />";

    ?>
    
</body>
</html>