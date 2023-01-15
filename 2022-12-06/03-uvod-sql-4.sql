--transakce

--zaručí nám, že se nějaká sada příkazů vykonala jako jeden celek
--pokud dojde k chybě, tak se nevykoná nic

--pojďme nyní vytvořit tabulku bankovni_ucet


DROP TABLE bankovni_ucet;

CREATE TABLE bankovni_ucet (
    cislo_uctu INT UNSIGNED PRIMARY KEY,
    majitel VARCHAR(255) NOT NULL,
    stav_konta DOUBLE DEFAULT 0,
    je_aktivni BOOLEAN DEFAULT 1
);

DESC bankovni_ucet;

INSERT INTO bankovni_ucet SET cislo_uctu = "123456", majitel = "Jirka", stav_konta = "1000";

SELECT * FROM bankovni_ucet;


INSERT INTO bankovni_ucet SET cislo_uctu = "123123", majitel = "Pepa";

INSERT INTO bankovni_ucet SET cislo_uctu = "111222", majitel = "Kuba", stav_konta = 25, je_aktivni = 0;

--tímto zahájíme trnsakci
--všechny příkazy po této query budou patřit do jedné transakce
--během transakce nemůže měnit dtb jiný proces uživatele
START TRANSACTION;

UPDATE bankovni_ucet SET stav_konta = stav_konta - 500 WHERE cislo_uctu = 123456;
UPDATE bankovni_ucet SET stav_konta = stav_konta + 500 WHERE cislo_uctu = 123123;

--musíme teď potvrdit transakci
COMMIT;

SELECT * FROM bankovni_ucet;

--pojďme si teď zkusit přerušit transakci
START TRANSACTION;

UPDATE bankovni_ucet SET stav_konta = stav_konta - 500 WHERE cislo_uctu = 123456;

--nyní se něco stalo;

--rollback transakci ukončí a vrátí všechny změny
ROLLBACK;