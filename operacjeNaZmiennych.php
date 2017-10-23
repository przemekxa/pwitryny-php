<?php

//
// Operatory
//

// potęgowanie
$potegowanie = 2**4;
echo $potegowanie, "<br />";

// modulo
$modulo = 11%3;
echo $modulo, "<br />";

// + - * /




//
// Operatory bitowe
//

// and &
// or |
// not ~
// xor ^
// przesunięcie bitowe w lewo << lub prawo >>


$dwadziescia = 0b10101;             // 21
echo $dwadziescia, "<br />";

$nowa = $dwadziescia << 1;          // 42
echo $nowa, "<br />";

$nowaPrawo = $dwadziescia >> 1;     // 10
echo $nowaPrawo, "<br />";





//
// Operatory logiczne
//

// and
// or
// xor
// not
// &&
// ||




// ZAD1
// Sprawdź, czy w sklepie kupisz samochód

$sklep = "otwarty";
$pieniadze = 2000000;
$ferrari = true;

if ($sklep == "otwarty" && $pieniadze >= 1500000 && $ferrari) {
    echo "Kupiłeś Ferrari.<br />";
} else {
    echo "Nie kupiłeś Ferrari.<br />";
}


// ZAD2
// Chcesz kupić w sklepie Ferrari lub BMW

$bmw = true;

if($sklep == "otwarty") {
    if($ferrari && !$bmw) echo "Kupiłeś Ferrari.<br />";
    else if(!$ferrari && $bmw) echo "Kupiłeś BMW.<br />";
    else if($ferrari && $bmw) echo "Kupiłeś zamówno Ferrari jak i BWM.<br />";
    else echo "Nie kupiłeś żadnego samochodu.<br />";
}

$a = 1;
$b = "1";


// === -> sprawdza wartość i typ

if($a === $b) {
    echo "A i B jest równe.<br />";
} else {
    echo "A i B jest RÓŻNE.<br />";
}




$x = 2;
echo $x;    // 2
echo ++$x;  // 3
echo $x;    // 3

$y = $x++;
echo $y;    // 3
$y = ++$x;
echo $y;    // 5
echo ++$y;  // 6


echo "<br /><br />";


// Rozmiar typu Integer
// (stała predefiniowana)
echo PHP_INT_SIZE;          // ilość bajtów (4 -> 32 bity; 8 -> 64 bity);
echo "<br /><br />";





//
// Kontrola typu zmiennych
//

$test = "Szkoła";
echo gettype($test), "<br />";  // string
$x = 2;
echo gettype($x), "<br />";     // integer
$a = 20.5;
echo gettype($a), "<br />";     // double
$y = true;
echo gettype($y), "<br />";     // boolean
$z = null;
echo gettype($z), "<br />";     // NULL
$w;
//echo gettype($w), "<br />";   // "Undefined variable" NULL

echo is_string($test);          // 1 -> true
echo is_string($x);             // nic -> false

echo is_bool($y);               // 1
echo is_float($a);              // 1
echo is_int($x);                // 1 | is_integer()
echo is_null($z);               // 1

echo "<br /><br />";





//
// Zmienne superglobalne
//

// $_GET
// $_POST
// $_COOKIE
// $_FILES
// $_SESSION

echo $_SERVER["SERVER_PORT"], "<br />";     // port np. 80
echo $_SERVER["SCRIPT_NAME"], "<br />";     // ścieżka pliku np. /4tbpa/p.php
echo $_SERVER["SERVER_PROTOCOL"], "<br />"; // protokół np. HTTP/1.1
echo $_SERVER["DOCUMENT_ROOT"], "<br />";   // ścieżka do dokumentu np. C:/xampp/htdocs

$lokalizacja = $_SERVER["DOCUMENT_ROOT"] . $_SERVER["SCRIPT_NAME"];
echo "Lokalizacja: ", $lokalizacja, "<br /><br /><br />";
// C:/xampp/htdocs/4tbpa/operacjeNaZmiennych.php





//
// Stałe
//
// (nazwy stałych DUŻYMI literami)


define("NAZWISKO", "Nowak");    // tworzenie

echo NAZWISKO;                  // używanie


define("imie", "Janusz");
echo imie;

define("WIEK", 18, true);       // bez sprawdzania wielkości liter !!!
echo WIEK;
echo wiek;

define("PI", 3.14159);
echo PI;
echo "<br /><br />";





//
// Stałe predefiniowane
//

echo gettype(PHP_VERSION), "<br />                                                                                    ";
$ver = PHP_VERSION;
if($ver >= 5.6) {
    echo "Nowa wersja PHP<br />";
} else {
    echo "Stara wersja PHP<br />";
}

echo PHP_OS, "<br />";
echo __LINE__, "<br />";            // linia w tekście
echo __FILE__, "<br />";            // C:\xampp\htdocs\4tbpa\operacjeNaZmiennych.php
echo __DIR__, "<br />";             // C:\xampp\htdocs\4tbpa





//
// Operator konwersji
// (rzutowania typów)
//

$x = 5.9;
$x = (int)$x;
echo $x;                        // 5

$y = 10.9;
$y = (float)$y;
echo gettype($y), "<br />";     // double


$z = 2;
$j = -1;
$c = 100;
$tekst = "wakacje";

echo gettype($z), "<br />";
$z = (float)$z;
echo gettype($z), "<br />";
echo $z, "<br />";

$j = (bool)$j;
echo gettype($j), "<br />";
echo $j, "<br />";              // 1


$c = (unset)$c;
echo gettype($c), "<br />";     // NULL
$c = "Jacek";
echo $c, "<br />";              // Jacek

$tekst = @(int)$wakacje;
echo gettype($tekst), "<br />";
echo $tekst, "<br />";

// string, array, object

?>
