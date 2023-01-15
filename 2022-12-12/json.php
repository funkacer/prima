<?php

    $jsonString = '{"jmeno":"Tony","rokNarozeni":1992,"hobby":["technika","posilovna","bazen"],"jeZenaty":false}';

    //převedeme JSON string na objekt
    $objekt = json_decode($jsonString);

    var_dump($objekt);

    echo $objekt->jmeno;

    $objekt->jmeno = "Antonín";

    //převedeme objekt na JSON string

    $string = json_encode($objekt);
    echo($string);



?>