<?php

require_once("./klasaSamochod.php");

class Ciezarowy extends Samochod {
    public $ladownosc, $naczepa=true;
    function wyswietl() {
        $markaModel = parent::wyswietl();
        return $markaModel."Ładowność:".$this->ladownosc."<br />";
    }
}

$tir1 = new Ciezarowy("Polska");
$tir1->ladownosc = 19000;
$tir1->marka = "DAF";
$tir1->model = "XF 95 480";

//echo $tir1->ladownosc, "<br />";
echo $tir1->wyswietl();


$obiekt = new Samochod("Polska");
$obiekt->ladownoscxx = 20000;
echo "<pre>", print_r($obiekt), "</pre>";




?>
