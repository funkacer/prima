--včera jsme se učili definiční příkazy

--dnes manipulační příkazy (operace s daty)

--data z tabulky se vypisují příkazem SELECT

SELECT * FROM uzivatel;

--do tabulky uzivatel vložíme první záznam

INSERT INTO uzivatel SET jmeno = "Jirka", prezdivka = "Klokan", heslo = 'papousek123', datum_vytvoreni = NOW();

--hodnoty sloupečku musíme mít v "" nebo '', nelze `` (toto je pro proměnné)
--SET umí vložit pouze jeden záznam

--pokud chceme vložit více uživatelů naráz, tak použijeme VALUES

INSERT INTO uzivatel (jmeno, prezdivka, heslo, datum_vytvoreni) VALUES ("Pepa", "Gibon", "tukan66", NOW()), ("Kuba", "Veverka", "ryba333", NOW());

--můžeme příkaz lépe zformátovat, aby se to lépe četlo
INSERT INTO uzivatel (
    jmeno, 
    prezdivka, 
    heslo, 
    datum_vytvoreni) VALUES (
    "Pepa", 
    "Gibon", 
    "tukan66", 
    NOW()
    ), (
    "Kuba", 
    "Veverka", 
    "ryba333", 
    NOW()
    );

--mazání dat

--POZOR!!! TOTO SMAŽE VŠECHNO Z TABULKY!!!
DELETE FROM uzivatel;

--toto index nezresetuje, ostatní AUTO-INCREMENT pokračují na 16 atd
INSERT INTO uzivatel SET id = 1, jmeno = "Jirka", prezdivka = "Klokan", heslo = 'papousek123', datum_vytvoreni = NOW();

--pokud smažeme všechny záznamy, tak AUTO-INCREMENT se nezresetuje
--pokud chceme začít znovu od 1, musíme ALTER TABLE uzivatel AUTO_INCREMENT = 1;
ALTER TABLE uzivatel AUTO_INCREMENT = 1;

--mnohem častěji se DELETE používá s podmínkou WHERE;
--musíme zjisti id záznamu, který chceme smazat
--id = 2;
DELETE FROM uzivatel WHERE id = 2;

SELECT * FROM uzivatel;

--toto smaže všechny Jirky
DELETE FROM uzivatel WHERE jmeno = "Jirka";

INSERT INTO uzivatel SET jmeno = "Tony", prezdivka = "Klokan", heslo = 'papousek123', datum_vytvoreni = NOW();
INSERT INTO uzivatel (jmeno, prezdivka, heslo, datum_vytvoreni) VALUES ("Pavlína", "Kachna", "brokolice43", NOW()), ("Jarda", "Křeček", "567notebook", NOW()), ("Tony", "Tuleň", "cervena!", NOW());

-- u podmínky WHERE můžeme použít AND a OR
DELETE FROM uzivatel WHERE jmeno = "Tony" AND prezdivka = "Tuleň";

DELETE FROM uzivatel WHERE jmeno = "Kuba" OR prezdivka = "Kachna";

--Tony si chce změnit heslo

--POZOR! TOTO změní u VŠECH!!!
UPDATE uzivatel SET heslo = "tukan90";

UPDATE uzivatel SET heslo = "tukan90" WHERE id = 6;

--lze udělat kopii, ale bez PRIMARY KEY a AUTO_INCREMENT a id DEFAULT je 0!!!
CREATE TABLE kopie AS SELECT * FROM uzivatel;

SELECT * FROM kopie;

DESC kopie;

--tímto se to spraví
ALTER TABLE kopie CHANGE COLUMN id id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT;
--ALTER TABLE kopie ADD PRIMARY KEY AUTO_INCREMENT (id);

INSERT INTO kopie SET jmeno = "Tony", prezdivka = "Klokan", heslo = 'papousek123', datum_vytvoreni = NOW();

DROP TABLE kopie;

SELECT * FROM uzivatel;