<?php

class Liczby {

    public $wartosc1 = 7;
    protected $wartosc2 = 8;    // ograniczona do klasy oraz klas pochodnych
    private $wartosc3 = 9;

    public function wyświetl() {
        echo "Wartość 1: ".$this->wartosc1."<br />";
        echo "Wartość 2: ".$this->wartosc2."<br />";
        echo "Wartość 3: ".$this->wartosc3."<br />";
    }

}

class Rzeczywiste extends Liczby {

    public function wyświetl() {
        echo "Wartość 1: ".$this->wartosc1."<br />";
        echo "Wartość 2: ".$this->wartosc2."<br />";
        echo "Wartość 3: ".$this->wartosc3."<br />";
    }

}

$liczba1 = new Liczby();
$liczba2 = new Rzeczywiste();

echo $liczba1->wartosc1."<br />";
//echo $liczba1->wartosc2."<br />";   // Fatal error - protected
//echo $liczba1->wartosc3."<br />";   // Fatal error - private
$liczba1->wyświetl();               // działa

echo "<br />";

$liczba2->wyświetl();               // wartosc3 nie działa - private


?>
