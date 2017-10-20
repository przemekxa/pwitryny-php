<?php

$liczba = 10;
$_liczba = 20;
$liczba2 = 30;              // cyfry dozwolone, NIE na początku

$imie = "Janusz";
$Imie = "Anna";
$imię = "Krzysztof";        // polskie znaki dozwolone
$wartość = 1;


echo "$liczba";             // w środku tekstu może być zmienna
echo '$liczba';             // ale nie tak
echo "<br />";


//
// Typy danych
//

// Typ skalarny (prosty)
$prawda = true;
$falsz = false;

// Typ integer
$calkowita = 300;           // na 32 lub 64 bitach (w zależności od systemu)
$szesnastkowa = 0x10;       // liczba szesnastkowa
$oktalna = 010;             // liczba ósemkowa
$binarna = 0b1010;          // liczba binarna

// Typ float
$dziesietna = 6.125;

// Typ string
$tekst1 = "tekst";
$tekst2 = 'tekst';

//heredoc                   // TEKST - etykieta
$imie = "Jan";
$napis = <<<TEKST
Mam na imię: $imie
<br />Mam 20 lat.
<h1>Egzamin</h1>TEKST
TEKST;

echo $napis;

//nowdoc                    // TEKST - etykieta
$nazwisko = "Kowalski";
$napis2 = <<<NAZWISKO
Mam na nazwisko: $nazwisko
<br />Mam 20 lat.
<h1>Egzamin</h1>
NAZWISKO;

echo $napis2;




?>
