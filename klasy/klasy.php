<?php

class Uzytkownik {

    public $imie, $nazwisko;

    public function ustawImie($wartosc) {
        $this->imie = $wartosc;
    }

    public function pobierzImie() {
        return $this->imie;
    }

    public function ustawNazwisko($nazwisko) {
        $this->nazwisko = $nazwisko;
    }

    public function pobierzNazwisko() {
        return $this->nazwisko;
    }

}

$uczen1 = new Uzytkownik();
$uczen2 = new Uzytkownik();

$uczen1->imie = "Janusz";
$uczen1->nazwisko = "Nowak";

$uczen2->ustawImie("Julia");
$uczen2->ustawNazwisko("Kowalska");


echo $uczen1->imie, " ", $uczen1->nazwisko, "<br />";
echo $uczen2->pobierzImie(), " ", $uczen2->pobierzNazwisko();




?>
