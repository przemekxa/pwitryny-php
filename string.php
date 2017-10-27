<?php
function br() { echo "<br /><br />"; }

$text = <<<TEKST
ZSK - Zespół
Szkół
Komunikacji
TEKST;

echo "Przed użyciem funckji nl2br:<br />$text<br /><br />";

echo "Po użyciu funkcji nl2br:<br />";
echo nl2br($text);
br();

// zamiana na małe litery
echo strtolower($text);
br();

// zamiana na duże litery
echo strtoupper($text);
br();

// zamiana pierwszej litery na dużą
$tekst = "rAZ DWA trzy";
echo ucfirst($tekst);
br();

// zamiana wszystkich pierwszych liter na duże
echo ucwords($tekst);
br();






$lorem = "An dolore malis est quamquam, an fugiat et multos. Do an malis quid quem hic
labore singulis nostrud de multos cupidatat et voluptatibus ubi te nisi probant
reprehenderit eu fore nostrud a elit lorem, dolore aut est quem offendit ex
incurreret eram velit in eram, ne nam aute aute quorum. Mentitum culpa fabulas,
in te anim dolor anim. Ne nulla minim id singulis aut consequat quid arbitror
offendit. Duis aliquip eu excepteur. Ne nostrud graviterque est ex duis
excepteur sempiternum, minim quibusdam te comprehenderit, incurreret
efflorescere iis offendit ea e ipsum fidelissimae, multos philosophari proident
sint admodum sed o quae eruditionem ad ita mentitum est cernantur. Enim qui
nostrud iis fugiat occaecat voluptate.";


$kolumna = wordwrap($lorem, 100, "<br />");
echo $kolumna;
br();





//
// usuwanie białych znaków
//

$imie1 = "Marian";
$imie = "  Marian ";

echo strlen($imie1), " ", strlen($imie);
br();

echo strlen(ltrim($imie)), "<br />";
echo strlen(rtrim($imie)), "<br />";
echo strlen(trim($imie)), "<br />";
br();





//
// przeszukiwanie
//

$adres = "Poznań, ul. Fredry 13, tel. (61) 445-44-56";

// wyszukanie ciągu od momentu znalezienia do końca
$szukaj = strstr($adres, "tel");
echo $szukaj;
br();

// wyszukiwanie ciągu od początku DO momentu znalezienia ciągu
$szukaj1 = strstr($adres, "tel", true);
echo $szukaj1;
br();

// nie zwracanie uwagi na wielkość liter
$szukaj2 = stristr($adres, "TEL");
echo $szukaj2;
br();


$mail = strstr("grzes@mail.pl", "@");
echo $mail;
br();

$mail1 = strstr("grzes@mail.pl", 64);       // kodem ASCII
echo $mail1;
br();



$ciag1 = "a";
$ciag2 = "aa";





//
// porównanie ciągów
//


echo strcmp($ciag1, $ciag2), "<br />";      // -1
echo strcmp("zzz", "zzz"), "<br />";        // 0
echo strcmp("zza", "zzz"), "<br />";        // -1
echo strcmp("zzc", "zzb"), "<br />";        // -1
echo strcmp("zzca", "zzc"), "<br />";       // -1
br();





//
// indeks, pozycja ciągu w ciągu
//

$poz = strpos("abcdefg", "cde");
echo $poz, '<br />';                        // 2

$poz = strpos("abcdefg", "ab");
echo $poz, '<br />';                        // 0




// ZAD
$tekst1 = "abcdabcd";
$tekst2 = "abc";

if(strpos($tekst1, $tekst2) === false) {
    echo "Ciąg $tekst2 nie znajduje się w ciągu $tekst1.";
} else {
    echo "Ciąg $tekst2 znajduje się w ciągu $tekst1.";
}
br();







//
// Przetwarzanie ciągów znaków
//

// str_replace(co zamienić, na co zamienić, w jakim tekście zamienić);
$zamien = str_replace("%imie%", "Janusz", "%imie% to nie imię, %imie% to styl życia");

echo $zamien;
br();

$login = "Łukasz Bąk";
$cenzura = array(
    "ę", "ó", "ą", "ś", "ł", "ż", "ź", "ć", "ń",
    "Ę", "Ó", "Ą", "Ś", "Ł", "Ż", "Ź", "Ć", "Ń"
);
$poprawne = array(
    "e", "o", "a", "s", "l", "z", "z", "c", "n",
    "E", "O", "A", "S", "L", "Z", "Z", "C", "N"
);

$poprawnyLogin = str_replace($cenzura, $poprawne, $login);
echo $poprawnyLogin;
br();



//
// ZAD 1 ZD
//
// Napisz program, który pozwoli cenzurować zdanie podane
// przez użytkownika (w formularzu). Wprowadzamy słowa
// niecenzuralne, zamieniane np na *, np. kurczę
//



//
// ZAD 2 ZD
//
// Napisz funkcję, któa będzie obliczała wystąpienia
// określonego ciągu znakó w danym tekście. Tekst
// i szukany ciąg znaków powinny być przekazywane
// w postaci argumentów.
//




br(); br(); br(); br();
?>
