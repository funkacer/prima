<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $poleDat = [
        "datum" => date("d.m.Y"),
        "pocetNavstevniku" => 2057,
        "zvireDne" => "Koala",
        "poleZvirat" => ["koala", "kocka", "tygr", "medved", "vlk", "panda"],
        "jeOtevreno" => false,
        "aktualniHodina" => date("H")
    ];
    //chcem  vytahnout z DB vsechna zviratka
    $poleObjektuZvire = DB::table("zvire")->get();
    //pokud chceme where
    //$poleObjektuZvire = DB::table("zvire")->where("cislo_vybehu", 7)->get();
    //$poleObjektuZvire = DB::table("zvire")->where("cislo_vybehu", ">=", 5)->get();
    $poleDat["poleObjektuZvire"] = $poleObjektuZvire;

    return view('welcome', $poleDat);
})->name('homepageRoute');


Route::get('kontakt', function () {
    $poleDat = [
        "kontaktniUdaje" => [
            "telefon" => 123456789,
            "email" => "info@zoo.cz",
            "adresa" => "Jablonskeho 2, Praha"
        ]
    ];
    return view('kontakt', $poleDat);
})->name('contactRoute');
