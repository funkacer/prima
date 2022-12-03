<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jméno a příjmení</title>
</head>
<body>
    <h1>Jméno a příjmení</h1>

    <?php 
        $jmeno = 'Jiří';
        $prijmeni = 'Černý';

        $celeJmeno = '<b>'.$jmeno.' '.$prijmeni.'</b>';

        echo $celeJmeno;

    ?>
    
</body>
</html>