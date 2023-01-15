--toto je jednořádkový komentář

/*
toto je více
řádkový komentář v sql
*/


--sql příkazy jsou case insensitive
--budeme ale psár příkazy velkýma a názvy malýma písmenama

--CREATE TABLE

CREATE TABLE blacklist (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, uzivatel_id INT UNSIGNED, prohresek TEXT, datum_vlozeni DATETIME);

--tento příkaz zobrazí všechny tabulky v DATABASE

SHOW TABLES;

--když budeme chtí vidět atributy tabulky
--DESC = DESCRIPITON
DESC blacklist;

DESC zprava;

--pokud chceme nějakou tabulku celou smazat
DROP TABLE blacklist;

SHOW TABLES;

--znovu a lépe
CREATE TABLE blacklist (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    uzivatel_id INT UNSIGNED, 
    prohresek TEXT, 
    datum_vlozeni DATETIME, 
    FOREIGN KEY (uzivatel_id) REFERENCES uzivatel(id));

DROP TABLE blacklist;

--foreign key lze přidat i později

CREATE TABLE blacklist (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    uzivatel_id INT UNSIGNED, 
    prohresek TEXT, 
    datum_vlozeni DATETIME);

--příkaz alter dokáže změnit jakoukoliv tabulku (přidávat, měnit, přejmenovávat sloupečky atd.)

ALTER TABLE blacklist ADD FOREIGN KEY (uzivatel_id) REFERENCES uzivatel(id);

--kontrola zda jsme udělali vše správně
--SHOW CREATE vypíše všechny informace o tabulce

SHOW CREATE TABLE blacklist;

--zahodit databázi
--DROP DATABASE diskuze;

--vytvoříme si cvičně ještě další tabulku;

CREATE TABLE kategorie (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    jmeno VARCHAR(20)
);

DESC kategorie;

--uděláme vazbu M:N
--musíme vytvořit spojovací tabulku
CREATE TABLE tema_kategorie (
    tema_id INT UNSIGNED,
    kategorie_id INT UNSIGNED,
    PRIMARY KEY (tema_id, kategorie_id),
    FOREIGN KEY (tema_id) REFERENCES tema(id),
    FOREIGN KEY (kategorie_id) REFERENCES kategorie(id)
);

SHOW CREATE TABLE tema_kategorie;

--nyní budeme chtít přidat nový sloupeček do tabulky uživatel

ALTER TABLE uzivatel ADD COLUMN datum_vytvoreni DATETIME;

DESC uzivatel;

--rozdel mezi DESC a SHOW CREATE TABLE
--desc vypíše jen sloupečky a typy, show vypíše i všechny klíče

--vyhodíme z blacklistu datum vložení

ALTER TABLE blacklist DROP COLUMN datum_vlozeni;

DESC blacklist;

--změníme datový typ
--prohresek zmenime z TEXT na VARCHAR

ALTER TABLE blacklist MODIFY COLUMN prohresek VARCHAR(255);

DESC blacklist;

--přejmenování

ALTER TABLE blacklist CHANGE COLUMN prohresek duvod VARCHAR(255);

