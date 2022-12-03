<?php
class Student {
    //to je staticka vlasnto classy
    static public $pocetStudentu = 0;
    static public $oborySkoly = ["programovani", "grafika", "managment"];

    //toto jsou vlastnosti ktere patri instanci
    public $id;
    public $jmeno;
    public $obor;
    public $rok;
    public $pohlavi;

    function __construct()
    {
        //staticke vlastnosti se pouzivaji se ::
        Student::$pocetStudentu += 1;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2</title>
</head>
<body>
    <h1>OOP2</h1>

    <?php
        new Student();
        new Student();
        new Student();

        echo Student::$pocetStudentu;
    ?>
</body>
</html>