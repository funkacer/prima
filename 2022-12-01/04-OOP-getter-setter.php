<?php

    class Fixa {
        public $barva;
        protected $aktualniInkoust;
        private $maxInkoust;

        function __construct($argBarva, $argAktualniInkoust, $argMaxInkoust)
        {
            $this->barva = $argBarva;
            $this->aktualniInkoust = $argAktualniInkoust;
            $this->maxInkoust = $argMaxInkoust;
            
        }

        //toto je setter, i bez public jsou automaticky funkce public
        //jinak musíme dát private / protected
        //settery chceme mít public
        public function naplnSe ($argNapln) {
            $this->aktualniInkoust += $argNapln;
            if ( $this->aktualniInkoust >  $this->maxInkoust) {
                $this->aktualniInkoust = $this->maxInkoust;
            }
        }

        //toto je getter
        public function getAktualniInkoust() {
            return $this->aktualniInkoust;
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Getters & Setters</title>
</head>
<body>
    <h1>OOP Getters & Setters</h1>
    
    <?php
    $fixa1 = new Fixa("blue", 30, 60);

    var_dump($fixa1);

    //toto je OK protože barva je public
    $fixa1->barva = "red";

    //toto vyhodí chybu, tuto vlastnost máme protected, nemůžeme volně měnit, protože bychom mohli překročit maxKapacitu
    //ale nemůžeme to ani číst!!!
    // proto uděláme setter and getter
    //$fixa1->aktualniInkoust = 120;
    //echo $fixa1->aktualniInkoust;

    $fixa1->naplnSe(40);
    var_dump($fixa1);
    echo "<br />";
    echo $fixa1->getAktualniInkoust();



    ?>

</body>
</html>