<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vlastní funkce</title>
</head>
<body>
    <h1>Vlastní funkce</h1>

    <?php

        /*do kulatých závorek dát kolik argumentů funkce očekává
        function vyberVetsi ($argPrvniCilso, $argDruheCislo) {
            if ($argPrvniCilso > $argDruheCislo) {
                //return je výsledek funkce
                return $argPrvniCilso;
            } else {
                //tato funkce má dva výsledky
                return $argDruheCislo;
            }
        }
        */

        //alt:
        //vždy se vykoná jen jeden return, tím celá funkce končí
        function vyberVetsi ($argPrvniCilso, $argDruheCislo) {
            if ($argPrvniCilso > $argDruheCislo) {
                //return je výsledek funkce
                $vitez = $argPrvniCilso;
            } else {
                //tato funkce má dva výsledky
                $vitez = $argDruheCislo;
            }

            return $vitez;
        }

        //zde funkci zavoláme (call a function)
        echo vyberVetsi(-2,2);

        //proměnné, které vzniknou uvnitř funkce, se nedostanou ven
        //angl. "scope" ($vitez má scope funkci vyberVetsi)

        //echo $vitez; //chyba

    ?>
    
</body>
</html>