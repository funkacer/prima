<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //toto vytvoří tabulku
        Schema::create('zvire', function (Blueprint $table) {
            $table->id();
            $table->string("jmeno"); //VARCHAR255
            $table->integer("cislo_vybehu")->default(0); //INT, default 0
            $table->text("popis")->nullable(); //TEXT muze byt NULL
            $table->boolean("je_zivy"); //TINYINT
            $table->string("pohlavi")->nullable(); //přidáno
            $table->timestamps();
        });

        //toto naplni tbaulku nejakymi daty
        DB::table("zvire")->insert([
            "jmeno" => "slon",
            "cislo_vybehu" => 7,
            "popis" => "Toto je slon africky muze vazit az 6tun.",
            "je_zivy" => true,
            "created_at" => date("Y-m-d")
        ]);
        
        DB::table("zvire")->insert([
            "jmeno" => "zebra",
            "cislo_vybehu" => 7,
            "popis" => "Zebra ma pruhy.",
            "je_zivy" => true,
            "created_at" => date("Y-m-d"),
            "pohlavi" => "samec"
        ]);

        DB::table("zvire")->insert([
            "jmeno" => "koala",
            "cislo_vybehu" => 5,
            "popis" => "Koaly jsou hloupy.",
            "je_zivy" => true,
            "created_at" => date("Y-m-d"),
            "pohlavi" => "samicka"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zvire');
    }
};
