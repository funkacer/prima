<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If</title>
</head>
<body>
    <h1>If</h1>

    <?php
        $jmeno = "Jirka";
        $vek = rand(14,18);

        echo "<h2>Ahoj $jmeno $vek.</h2>";

        echo "Do klubu mohou vstoupit pouze osoby 18+.";
        echo "<br />";

        //do kulaté závorky se zadá nějaké porovnání
        //pokud vyjde podmínka jako true, vykoná se všechen kód v chlupatých závorkách
        if ($vek >= 18) {
            echo "Ano, jste plnoletý, můžete vstoupit.";
        } else if ($vek >= 15) {
            //tato podmínka se provede pokud první podmínka vyšla false
            echo "Nejste plnoletý ale 15 už vám bylo, tak pojďte do nealko.";
        } else {
            //pokud všechno ostatní selže
            echo "Ne, tady máte mlíko a běžte domů.";
        }

        echo "<hr />";

        //Častá chyba: musí se psát ==

        $ovoce = "ananas";

        if ($ovoce == "banán") {
            echo "Toto je banán.";
        } else {
            echo "Toto není banán.";
        }

        

        


    ?>
</body>
</html>