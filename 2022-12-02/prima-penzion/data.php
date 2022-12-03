<?php

    class Stranka {
        protected $id;
        protected $titulek;
        protected $menu;
        protected $obrazek;

        public function __construct($argId, $argTitulek, $argMenu, $argObrazek)
        {
            $this->id = $argId;
            $this->titulek = $argTitulek;
            $this->menu = $argMenu;
            $this->obrazek = $argObrazek;
        }

        public function getId () {
            return $this->id;
        }

        public function getTitulek () {
            return $this->titulek;
        }

        public function getMenu () {
            return $this->menu;
        }

        public function getObrazek () {
            return $this->obrazek;
        }

        public function getObsah () {
            return file_get_contents("./".$this->id.".html");
        }

        public function setObsah($novyObsah) {
            file_put_contents("./".$this->id.".html", $novyObsah);
        }

    }

    $seznamStranek = [
        "domu" => new Stranka("domu","Prima Penzion","Domů","primapenzion-main.jpg"),
        "kontakt" => new Stranka("kontakt","Kontakt","Napište nám","primapenzion-pool-min.jpg"),
        "rezervace" => new Stranka("rezervace","Rezervace","Chci pokoj","primapenzion-room.jpg"),
        "galerie" => new Stranka("galerie","Galerie","Fotky","primapenzion-room2.jpg"),
        "404" => new Stranka("404","Chyba 404","","primapenzion-main.jpg")];

    /*
    $seznamStranek = [
        "domu" => [
            "id" => "domu",
            "titulek" => "Prima Penzion",
            "menu" => "Domů",
            "obrazek" => "primapenzion-main.jpg"
        ],
        "kontakt" => [
            "id" => "kontakt",
            "titulek" => "Kontakt",
            "menu" => "Napište nám",
            "obrazek" => "primapenzion-pool-min.jpg"
        ],
        "rezervace" => [
            "id" => "rezervace",
            "titulek" => "Rezervace",
            "menu" => "Chci pokoj",
            "obrazek" => "primapenzion-room.jpg"
        ],
        "galerie" => [
            "id" => "galerie",
            "titulek" => "Galerie",
            "menu" => "Fotky",
            "obrazek" => "primapenzion-room2.jpg"
        ],
        "404" => [
            "id" => "404",
            "titulek" => "Chyba 404",
            "menu" => "",
            "obrazek" => "primapenzion-main.jpg"
        ]
    ];

    */


?>