<?php

//
// Tablice indeksowane numerycznie
//

$kolory = array("biały", "zielony", "czerwony");

echo "Początkowa zawartość tablicy:<br>";

for($i=0; $i<count($kolory); $i++) {
    $j = $i+1;
    echo "Element [$j]: $kolory[$i]<br>";
}
echo "<br>";

$kolory[0] = "orange";
$kolory[1] = "aqua";
$kolory[2] = "magenta";

for($i=0; $i<count($kolory); $i++) {
    $j = $i+1;
    echo "Element [$j]: $kolory[$i]<br>";
}





//
// Tablice asocjacyjne
//

$dane = array(
    "imie" => "Janusz",
    "nazwisko" => "Nowak",
    "wiek" => 20
);

echo "<br>Zawartość tablicy:<br>";
echo <<<TABLICA
Imię: {$dane['imie']}<br>
Nazwisko: {$dane['nazwisko']}<br>
Wiek: {$dane['wiek']}<br><br>
TABLICA;

foreach($dane as $wartosc) {
    echo "Wartość: $wartosc<br>";
}

echo "<br>";

foreach($dane as $klucz => $wartosc) {
    echo "Element $klucz: $wartosc<br>";
}

echo "<br>";







//
// Tablice wielowymiarowe
//

$uczen = array(
    array("Julia", "Nowak", 20),
    array("Anna", "Kowal", 19)
);

for($i=0; $i<count($uczen); $i++) {

    for($j=0; $j<count($uczen[$i]); $j++) {

        echo "Element [$i][$j]: {$uczen[$i][$j]}<br>";

    }

}

echo "<br><br>";

foreach($uczen as $klucz => $tablica) {

    foreach($tablica as $klucz2 => $wartosc) {

        echo "Element [$klucz][$klucz2]: $wartosc<br>";

    }

}

echo "<br>";


$cyfry = array(
    array(1, 2, 3, 4),
    array(5, 6, 7),
    array(8),
    array(9, 10)
);

foreach($cyfry as $wartosc) {

    foreach($wartosc as $x) {
        echo "$x, ";
    }

    echo "<br>";
}
echo "<br><br>";






//
// Sortowanie tablic
//

$tab = array(10, 1, 5, 75, -4, 100);

foreach($tab as $liczba) {
    echo "$liczba, ";
}
echo "<br>";


// rosnąco
sort($tab);

echo "<br>Tablica posortowana rosnąco:<br>";
foreach($tab as $liczba) {
    echo "$liczba, ";
}
echo "<br>";


// malejąco
rsort($tab);

echo "<br>Tablica posortowana malejąco:<br>";
foreach($tab as $liczba) {
    echo "$liczba, ";
}
echo "<br><br><br>";




$tab2 = array("karol", "anna", "zenon", "Julia", "paweł");

foreach($tab2 as $klucz => $y) {
    $z = strtolower($y);                            // zamiana na małe litery
    $tab2[$klucz] = $z;
    echo "$z, ";
}
echo "<br>";

sort($tab2);

echo "<br>Tablica posortowana rosnąco:<br>";
foreach($tab2 as $imie) {
    echo "$imie, ";
}
echo "<br>";


function wyswietl($tab) {
    foreach($tab as $x) {
        echo "$x ";
    }
    echo "<br><br>";
};







//
// Sortowanie tablicy asocjacyjnej
//

echo "<br><br>Tablica asocjacyjna:<br>";

$tabAsoc = array(
    "imie" => "Andrzej",
    "pseudonim" => "Endru",
    "wiek" => 30,
    "nazwisko" => "Kowalski"
);


wyswietl($tabAsoc);


// sortowanie według wartości
asort($tabAsoc);
wyswietl($tabAsoc);


// odwrotne sortowanie
arsort($tabAsoc);
wyswietl($tabAsoc);


echo gettype($tabAsoc["imie"]), "<br>";     // string
echo gettype($tabAsoc["wiek"]), "<br><br>";     // integer


// sortowanie według klucza
ksort($tabAsoc);
wyswietl($tabAsoc);

krsort($tabAsoc);
wyswietl($tabAsoc);







//
// wyświetlanie danych z tablicy
//

var_dump($tabAsoc);
echo "<br><br>";

print_r($tabAsoc);
echo "<br><br>";

echo "<pre>", print_r($tabAsoc), "</pre>";


echo "<br><br><br><br>";
?>
