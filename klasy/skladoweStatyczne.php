<?php

class Liczby {

    public static $liczba = 10;

    public static function wyswietl() {
        echo "Wartość statycznego pola wynosi: ";
        echo Liczby::$liczba;
        echo "<br />";
    }

}

echo Liczby::$liczba."<br />";

Liczby::wyswietl();

Liczby::$liczba = 200;

Liczby::wyswietl();

?>
