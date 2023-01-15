
--pokud nefunguje
USE primakurzy;

-- nejdříve se podíváme, jaké všechny databáze tu máme
SHOW TABLES;

--budeme používat tabulku země

SELECT * FROM zeme;

DESC zeme;

SHOW CREATE TABLE zeme;

--chci vypsat všechny země ležící v Evropě

SELECT * FROM zeme WHERE kontinent = "Evropa";

--země platící EUR
SELECT * FROM zeme WHERE mena = "EUR";

--země platící EUR mimo Evropa
SELECT * FROM zeme WHERE mena = "EUR" AND kontinent != "Evropa";

--země platící EUR nebo USD
SELECT * FROM zeme WHERE mena = "EUR" OR mena = "USD";

--země platící EUR nebo USD nebo JPY
SELECT * FROM zeme WHERE mena = "EUR" OR mena = "USD" OR mena = "JPY";

--alternativní zápis, pokud máme více OR stejného typu
SELECT * FROM zeme WHERE mena IN ("EUR", "USD", "JPY");

--opakem je NOT IN
SELECT * FROM zeme WHERE mena NOT IN ("EUR", "USD", "JPY");

-- * znamená že chceme vy výsledku vypsat všechny hvězdičky
SELECT nazev_cesky, kontinent FROM zeme;

-- při výpisu můžeme přejmenovat sloupečky
--tento alias není trvaly a nijak nemění db
SELECT nazev_cesky AS nazev, kontinent FROM zeme;


--LIKE používáme pokud chceme vyhledat pouze podle části stringu
--vypíšeme všechny státy které začínají na F
--% znamená cokoliv jakkoliv dlouhé
SELECT * FROM zeme WHERE nazev_cesky LIKE "Fi%";

SELECT * FROM zeme WHERE nazev_cesky LIKE "%ie";

--opakem je NOT LIKE
--toto mi vypíše všechny státy které nezačínají na E
SELECT * FROM zeme WHERE nazev_cesky NOT LIKE "E%";

--vypište všechny státy které mají ve svém názvu A, ale nesní končit ani začínat A
SELECT * FROM zeme WHERE nazev_cesky LIKE "%A%" AND nazev_cesky NOT LIKE "A%" AND nazev_cesky NOT LIKE "%A";

--Řazení
--použijeme ORDER BY
--default je ASC
--dává se až za WHERE
SELECT * FROM zeme ORDER BY mena ASC;
SELECT * FROM zeme ORDER BY mena DESC;

--vypsat všechny státy Afriky a seřadit je podle měny
SELECT * FROM zeme WHERE kontinent = "Afrika" ORDER BY mena;

--pokud chceme zjistit unikátní hodnoty, použijeme DISTINCT
SELECT DISTINCT(kontinent) FROM zeme;

--LIMIT se píše až na konec a omezí výstup
SELECT * FROM zeme ORDER BY nazev_cesky DESC LIMIT 15;

--LIMIT může mít dva parametry:
--1. kolik se má přeskočit
--2. kolik se má vypsat

SELECT * FROM zeme ORDER BY nazev_cesky DESC LIMIT 10, 5;

--union nám spojí dohromady výsledky 2 různých selectů ze stejné tabulky nebo se stejnou strukturou
--např chceme 5 prvních států a 7 posledních
--musí se uzavřít do závorek
(SELECT * FROM zeme ORDER BY nazev_cesky LIMIT 5)
UNION
(SELECT * FROM zeme ORDER BY nazev_cesky DESC LIMIT 7)
ORDER BY nazev_cesky;

--kartézský součin (kombinace každý s každým záznamem z různých tabulek)
SELECT * from zeme, uzivatel;

--GROUP BY nám seskupí záznamy podle nějaké hodnoty
--takto napsaný GROUP BY není většinou moc užitečný
SELECT * FROM zeme GROUP BY kontinent;

--takto je to mnohem užitečnější
--vidíme, kolik států je na jakém kontinentu
SELECT COUNT (*), kontinent FROM zeme GROUP BY kontinent;

--většinou se ještě tomu vypočítanému sloupečku dává nějaký alias
SELECT COUNT (*) AS pocet_statu, kontinent FROM zeme GROUP BY kontinent;

--agregační funkce
SELECT COUNT(*), SUM(t1.pocet_statu), AVG(t1.pocet_statu), MIN(t1.pocet_statu), MAX(t1.pocet_statu) FROM (
    SELECT COUNT (*) AS pocet_statu, kontinent FROM zeme GROUP BY kontinent) t1;

--pokud máme GROUP BY a potřebujeme další podmínku, použijeme HAVING
SELECT mena, COUNT(*) AS pocet_statu
FROM zeme
GROUP BY mena
HAVING pocet_statu > 1;

--join spojí různé tabulky podle klíče

SELECT * FROM prezdivka;

SELECT * FROM uzivatel;

--uzivatel.id znamená pole id z tabulky uzivatel
--tomuto joinu se říká INNER JOIN
--tímto joinem jsme vypsaly jen SPOLEČNÉ záznamy z obou tabulek (se stejným klíčem)
SELECT * FROM uzivatel JOIN prezdivka ON uzivatel.id = prezdivka.uzivatel_id;

--pokud bychom chtěli vidět všechny uživatele, použijeme LEFT JOIN
SELECT * FROM uzivatel LEFT JOIN prezdivka ON uzivatel.id = prezdivka.uzivatel_id;

--pokud bychom chtěli vidět všechny přezdívky, lze použít i RIGHT JOIN
SELECT * FROM uzivatel RIGHT JOIN prezdivka ON uzivatel.id = prezdivka.uzivatel_id;

--nebo tabulky prohodit
SELECT * FROM prezdivka LEFT JOIN uzivatel ON uzivatel.id = prezdivka.uzivatel_id;

--nejde
SELECT * FROM uzivatel FULL OUTER JOIN prezdivka ON uzivatel.id = prezdivka.uzivatel_id;

--pokud chceme hledat řádky podle null, nemůže použít =
--musí se použí IS NULL
SELECT * FROM uzivatel LEFT JOIN prezdivka ON uzivatel.id = prezdivka.uzivatel_id WHERE prezdivka.uzivatel_id IS NULL;

--opakem je IS NOT NULL
SELECT * FROM uzivatel LEFT JOIN prezdivka ON uzivatel.id = prezdivka.uzivatel_id WHERE prezdivka.uzivatel_id IS NOT NULL;

