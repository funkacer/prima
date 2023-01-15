
SELECT * FROM teploty;

--indexy
--máme tabulku teploty
--zjistíme kolik stupňů bylo před rokem

SELECT * FROM teploty WHERE cas > NOW() - INTERVAL 1 YEAR LIMIT 1;
--trvá cca 2 sec

SHOW CREATE TABLE teploty;

--uděláme index
CREATE INDEX teplota_index ON teploty(teplota);
--špatně, odstranit
DROP INDEX teplota_index ON teploty;

--znovu a lépe
CREATE INDEX cas_index ON teploty(cas);

SHOW CREATE TABLE teploty;
SELECT * FROM teploty WHERE cas > NOW() - INTERVAL 1 YEAR LIMIT 1;
--trvá cca 0.2 sec

SELECT COUNT(*), SUM(teplota), AVG(teplota), MIN(teplota), MAX(teplota) FROM teploty;