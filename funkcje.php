<?php

// Restrykcje dot. typów danych
// declare(strict_types=1);

function wartosc($a) : string {
    if($a < 0) {
        return "ujemna<br />";
    } else if($a > 0) {
        return "dodatnia<br />";
    } else {
        return 0;
    }
}


echo wartosc(10);
echo gettype( wartosc(0) );        // string
echo "<br /><br />";



function pobierzWartosc() : int {
    return 10.25;
}

echo pobierzWartosc(), "<br />";



//
// Zasięg zmiennych
// dwa sposoby
//

$x = 20;
function wyswietl() {
    echo "Wartosć zmiennej \$x=";
    echo $GLOBALS["x"];             // zmienne globalne
    echo "<br />";
}
wyswietl();

$y = 5;
function wyswietlY() {
    global $y;                      // zmienne globalne
    echo "Wartość zmiennej \$y=$y<br />";
}
wyswietlY();




function suma() {
    $liczba = 10;
    echo "\$liczba wynosi $liczba<br />";
    $liczba+=5;
}
suma();     // 10
suma();     // 10


function suma1() {
    static $liczba = 10;            // zmienna statyczna
    echo "\$liczba wynosi $liczba<br />";
    $liczba+=5;
}
// Zmienna zmienia swoją wartość
suma1();    // 10
suma1();    // 15
suma1();    // 20



//
// Argumenty
//


// argument domyślny
function dodaj($x, $y = 1) {
    return $x + $y;
}

echo dodaj(20, 6);  // 26
echo "<br />";
echo dodaj(20);     // 21
echo "<br />";
echo dodaj(2, 5);   // 7
echo "<br />";
echo dodaj(3);      // 4
echo "<br />";



//
// Argumenty i typy danych
//

// Typ danych w argumencie
function mnozenie(float $x, int $y) {
    return $x * $y;
}

echo mnozenie(10, 10);      // 100
echo "<br />";
echo mnozenie(10.5, 10);    // 105
echo "<br />";
echo mnozenie(10, 10.5);    // 100
echo "<br />";



?>
