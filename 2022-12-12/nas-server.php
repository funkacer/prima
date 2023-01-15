<?php 

    if (array_key_exists("randomSubmit", $_POST)) {
        $min = $_POST["min"];
        $max = $_POST["max"];

        $nahodneCislo = rand($min, $max);

        echo $nahodneCislo;
    }
?>