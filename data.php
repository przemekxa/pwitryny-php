<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Data</title>
</head>
<body>

<?php

echo date("Y");
echo date("Y")."<br />";        // 2017
echo date("y")."<br />";        // 17
echo date("Y-m-d")."<br />";    // 2017-10-30   // d - (z zerem na początku)
echo date("Y-M-d")."<br />";    // 2017-Oct-30
echo date("Y-M-D")."<br />";    // 2017-Oct-Mon
echo date("l")."<br />";        // pełna nazwa dnia tygodnia
echo date("S")."<br />";        // przyrostek (który dzień miesiąca), np. th
echo date("t")."<br />";        // liczba dni w miesiącu

echo date("L")."<br />";        // sprawdzenie roku przestępnego (- nie; 1 = tal)
echo date("O")."<br />";        // różnica do czasu Greenwich (GMT)
echo date("P")."<br />";        // różnica do czasu Greenwich (GMT) z separatorem (:)
echo date("o")."<br />";        // rok
echo date("e")."<br />";        // strefa czasowa, np. Europe/Berlin
echo date("T")."<br />";        // strefa czasowa, np. CET
echo date("F")."<br />";        // miesiąc - pełna nazwa, np. October

echo date("g")."<br />";        // godzina (BEZ zera na początku), format 12h
echo date("G")."<br />";        // godzina (BEZ zera na początku), format 24h
echo date("h")."<br />";        // godzina (z zerem na początku), format 12h
echo date("H")."<br />";        // godzina (z zerem na początku), format 24h
echo date("i")."<br />";        // minuta (z zerem na początku)
echo date("I")."<br />";        // czas letni lub zimowy (0 - zimowy; 1- letni)
echo date("j")."<br />";        // dzień miesiąca (BEZ zera na początku)
echo date("m")."<br />";        // miesiąc (z zerem początku)
echo date("n")."<br />";        // miesiąc (BEZ zera na początku)

echo date("s")."<br />";        // sekundy (z zerem na początku)

echo date("U")."<br />";        // sekundy od 1-1-1970

echo date("w")."<br />";        // dzień tygodnia (nd - 0; pn - 1)
echo date("W")."<br />";        // numer tygodnia w roku


echo date("z")."<br />";        // dzień roku

echo "<br /><br />";

$data = getdate();
$dzien = $data["mday"];
$miesiac = $data["mon"];
$dzienTygodnia = $data["wday"];
$dzienRoku = $data["yday"];
$dzienTygodniaAng = $data["weekday"];
$miesiacAng = $data["month"];

switch ($miesiac) {
    case 1 : $miesiac = "styczeń"; break;
    case 2 : $miesiac = "luty"; break;
    case 3 : $miesiac = "marzec"; break;
    case 4 : $miesiac = "kwiecień"; break;
    case 5 : $miesiac = "maj"; break;
    case 6 : $miesiac = "czerwiec"; break;
    case 7 : $miesiac = "lipiec"; break;
    case 8 : $miesiac = "sierpień"; break;
    case 9 : $miesiac = "wrzesień"; break;
    case 10: $miesiac = "październik"; break;
    case 11: $miesiac = "listopad"; break;
    case 12: $miesiac = "grudzień"; break;
}

switch ($dzienTygodnia) {
    case 0: $dzienTygodnia = "niedziela"; break;
    case 1: $dzienTygodnia = "poniedziałek"; break;
    case 2: $dzienTygodnia = "wtorek"; break;
    case 3: $dzienTygodnia = "środa"; break;
    case 4: $dzienTygodnia = "czwartek"; break;
    case 5: $dzienTygodnia = "piątek"; break;
    case 6: $dzienTygodnia = "sobota"; break;
}



$rok = $data["year"];
echo "Dzisiaj jest: $dzien $miesiac $rok, $dzienTygodnia.<br>
Dzień roku: $dzienRoku. $dzienTygodniaAng $miesiacAng<br /><br /><br />";




// Strefa czasowa
setlocale(LC_ALL, 'plk');
echo strftime("%Z")."<br />";            // Środkowoeuropejski czas standardowy
echo strftime("%z");                     // +0100


echo "<br /><br />Data: ".strftime("%d.%m.%Y")."<br /><br /><br />";







echo strftime("Czas: %H:%M:%S.<br />");
echo strftime("Mamy %U. tydzień roku i %j. dzień roku.<br />");
echo strftime("Dziś jest %A, %d %B %Y r.<br /><br /><br />");








//
// znacznik czasu
//


$r1 = date("Y");
$m1 = date("m");
$d1 = date("d");

$r2 = 2018;
$m2 = 1;
$d2 = 27;

$czas1 = mktime(0, 0, 0, $m1, $d1, $r1);
$czas2 = mktime(0, 0, 0, $m2, $d2, $r2);
$czas3 = mktime(0, 0, 0, 10, 31, 2017);
$czasDzis = strtotime("now");                           // czas dzisiaj

$czas = ceil(($czas2 - $czasDzis)/86400);
echo "Do studniówki pozostało: $czas dni<br />";

$doMatury = ceil((mktime(0,0,0,5,4,2018) - $czasDzis)/86400);
echo "<h1>Do matury pozostało: $doMatury dni.</h1><br /><br /><br /><br />";



$dataUr = strtotime("2 march 2018 18:12:36");
$dataUr = abs($dataUr);
echo $dataUr."<br />";


$dziesiecDniWstecz = strtotime("- 10 day")."<br />";
echo $dziesiecDniWstecz;

$przyszlosc = strtotime("+10 day 6 hour 20 minutes 20 seconds");
echo $przyszlosc."<br />";

?>
</body>
</html>
