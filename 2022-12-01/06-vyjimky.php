<?php

    function getFileContent($soubor) {
        $fp = fopen($soubor, "r");
        
        // pokud je handle na soubor neplatný, tak skončíme s  chybou
        if (!$fp) {
            throw new Exception("Soubor se nepodařilo otevřít");
        }
        
        $wholeContent = "";
        while (true) {
            $data = fread($fp, 10);
            if (!$data) {
                break;
            }
            $wholeContent .= $data;
        } 
        
        fclose($fp);
        
        return $wholeContent;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výjimky</title>
</head>
<body>
    <h1>Výjimky</h1>

    <?php
        try {
            echo getFileContent("aaaa.txt");
        }catch (Exception $e) {
            echo "Nastala chyba: ".$e->getMessage();
        }
    ?>
    
</body>
</html>