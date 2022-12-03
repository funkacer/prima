<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regulární výrazy</title>
</head>
<body>
    <h1>Regulární výrazy</h1>

    <?php
        //PHP používá Perl regulární výrazy
        $isValid = preg_match('/^.+@.+\\..+$/', 'nejaky@email.cz');
        $isValid = preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', 'nejaky@email.czzzz');

        //echo $isValid;

        // . znamená libovolný znak

        // * znak před hvězdičkou může být 0 až n-krát
        $isValid = preg_match('/^Ji*rka$/', "Jrka"); //1
        $isValid = preg_match('/^Ji*rka$/', "Jiiiirka"); //1

        // + znak před plus může být 1 až n-krát
        $isValid = preg_match('/^Ji+rka$/', "Jrka"); //0
        $isValid = preg_match('/^Ji+rka$/', "Jiiiirka"); //1

        // ? znak před ? může nebo nemusí být
        $isValid = preg_match('/^Ji?rka$/', "Jrka"); //1
        $isValid = preg_match('/^Ji?rka$/', "Jirka"); //1
        $isValid = preg_match('/^Ji?rka$/', "Jiirka"); //0

        // {} závorky říkají v jaké počtu(přesně nebo rozsah od,do) musí být znak před
        $isValid = preg_match('/^Ji{2,3}rka$/', "Jirka"); //0
        $isValid = preg_match('/^Ji{2,3}rka$/', "Jiirka"); //1
        $isValid = preg_match('/^Ji{2,3}rka$/', "Jiiirka"); //1
        $isValid = preg_match('/^Ji{2,3}rka$/', "Jiiiirka"); //1
        $isValid = preg_match('/^Ji{2}rka$/', "Jirka"); //0
        $isValid = preg_match('/^Ji{2}rka$/', "Jiirka"); //1
        $isValid = preg_match('/^Ji{2}rka$/', "Jiiirka"); //0

        //| rika ze je platne to co je pre pajpou nebo to co je za pajpou
        $isValid = preg_match("/ano|ne/", "kocka"); //false
        $isValid = preg_match("/ano|ne/", "ano"); //true
        $isValid = preg_match("/ano|ne/", "ne"); //true
        $isValid = preg_match("/ano|ne/", "nevim"); //true
        $isValid = preg_match("/ano|ne/", "anonymous"); //true

        $isValid = preg_match("/ano|ne$/", "nevim"); //0
        $isValid = preg_match("/ano$|ne/", "anonymous"); //0

        $isValid = preg_match("/ano|ne$/", "anonymous nevim"); //1
        $isValid = preg_match("/ano$|ne/", "anonymous nevim"); //1

        $isValid = preg_match("/ano$|ne$/", "anonymous nevim"); //0
        $isValid = preg_match("/^ous|ne$/", "anonymous nevim"); //0

        //^ strika rika ze testovane slovo musi nejaky zacinat
        $isValid = preg_match("/^teta/", "tetanus"); //true
        $isValid = preg_match("/^teta/", "prateta"); //false

        //$ rika ze to tim slovem ma koncit
        $isValid = preg_match("/teta$/", "tetanus"); //false
        $isValid = preg_match("/teta$/", "prateta"); //true

        //seksupovani pomoci ()
        $isValid = preg_match("/dekuj(i|eme)/", "dekuji"); //1
        $isValid = preg_match("/dekuj(i|eme)/", "dekujeme"); //1

        //v hrantych zavorkach napiseme jake znaky je povoleno pouzit
        $isValid = preg_match("/[abc]/", "aaaaaaa"); //true
        $isValid = preg_match("/[abc]/", "bbbb"); //true
        $isValid = preg_match("/[abc]/", "ddddd"); //false

        $isValid = preg_match("/a[abcd]/", "ad"); //1

        //poku pouzijeme uvnitr [] pomlcku, tak to zname rozsah
        $isValid = preg_match("/a[b-d]/", "ad"); //1

        //pravidla se mezi sebou kombinují
        $isValid = preg_match("/[b-d]{3}/", "efbcde"); //1
        $isValid = preg_match("/[b-d]{3}$/", "efbcde"); //0

        // zpětné lomítko znak oescapuje
        $isValid = preg_match("/[a-z]*\.[a-z]*/", "efb.cde"); //1

        echo $isValid;

    ?>
    
</body>
</html>