<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formuláře</title>
</head>
<body>
    <h1>Formuláře</h1>

    <?php

        //pokud nedám name u prvků formuláře, tak zůstane prázdné
        //u radiobuttonu musí být stejný name!!!
        //toto jsou pole, která v sobě mají data odeslaného formuláře
        var_dump($_GET);
        var_dump($_POST);
        var_dump($_REQUEST);

        //ve formuláři má každý input atribut name
        //na serveru pak uvidíme name jako klíč v poli
        //pokud se formulář ještě neodeslal, hlásí klíče chybu
        //toto zjistí, zda dorazil formulář, pokud ano, tak zpracujeme
        if (array_key_exists("objednavka-submit", $_GET)) {
            echo "Celé jméno: ".$_GET["cele-jmeno"];
        } else {
            echo "Formulář ještě nedorazil!";
        }

        //pokud je formular typu GET tak v URL uvidime toto
    //http://localhost/tonda/2022-11-25/01-formulare.php?cele-jmeno=&varianta-barvy=jedna&zprava=Zde+napiste+svou+zpravu&souhlas=nesouhlasim&souhlas=souhlasim&objednavka-submit=Odeslat+formular+na+server
        
        //vhodné pro eshop (lze poslat url mailem), ale ne pro přihlašovací údaje!!!

        //pro přihlášení použí metodu POST => ¨vstupy se objeví v proměnné $_POST

        //bezpečnější vše dělat POSTem

        echo "<hr />";


    ?>

    <!--<form method="get">-->
    <form method="post">

        <!--když klikne na label tak kurzor automaticky skočí do pole input-->
        <label for="kocka">Text Input</label>
        <input type="text" name="cele-jmeno" id="kocka">
        <hr />
        <label for="tulen"></label>
        <input type="password" name="heslo" id="tulen">
        <hr />
        <label for="klokan">Select Input</label>
        <select name="varianta-barvy" id="klokan">
            <option value="jedna">Výběr 1</option> 
            <option value="dva">Výběr 2</option> 
            <option value="tri">Výběr 3</option> 
        </select>
        <hr />
        <!--Musí se přidat value, jinak bude string vždy "on"-->
        <!--Pro předvýběr dát atribut checked-->
        <label for="mravenec">Yes</label>
        <input type="radio" name="je-zenaty" value = "ano" id="mravenec" checked>
        <label for="hroch">No</label>
        <input type="radio" name="je-zenaty" value="ne" id="hroch">
        <hr />
        <label for="pav">Textarea Input</label>
        <textarea name="zprava" id="pav" cols="30" rows="10">Zde napište svou zprávu</textarea>
        <hr />
        <!--Pokud se nezaškrtne, tak se vůbec checkbox neobjevi v $_GET, proto input:hidden-->
        <label for="kapr">Input Checkbox</label>
        <!-- lze použít i pro identifikaci hashe při anketách, has se dá do value-->
        <input type="hidden" name="souhlas" value="nesouhlasim">
        <input type="checkbox" name="souhlas" value="souhlasim" id="kapr">
        <hr />
        <!--Musí se přidat jméno kvůli kontrole odeslání, pokud by bylo na stránce víc submitů-->
        <input type="submit" name = "objednavka-submit" value="Odeslat formulář na server">

    </form>
    
</body>
</html>