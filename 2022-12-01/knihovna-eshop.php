<?php
    namespace Eshop {
        class Produkt {
            protected $id;
            protected $sklad;
            protected $cena;
            protected $jmeno;

            function __construct($argId, $argSklad, $argCena, $argJmeno) {
                $this->id = $argId;
                $this->sklad = $argSklad;
                $this->cena = $argCena;
                $this->jmeno = $argJmeno;
            }
        }

        class Objednavka {
            protected $id;
            protected $celkovaCena;
            protected $dorucovaciAdresa;

            function __construct($argId, $argCelkovaCena, $argDorucovaciAdresa) {
                $this->id = $argId;
                $this->celkovaCena = $argCelkovaCena;
                $this->dorucovaciAdresa = $argDorucovaciAdresa;
            }
        }
    }
?>