# Funkcje w PHP

### String:
- ```nl2br($t)``` - zmaienia nowe linie na <br>
- ```strtolower($t)``` - zamienia na małe litery
- ```strtoupper($t)``` - zamiana na duże litery
- ```ucfirst($t)``` - zamiana pierwszej litery na dużą
- ```ucwords($t)``` - zamiana wszystkich pierwszych liter na duże
- ```wordwrap($t, 30, "<br />")``` - zawijanie tekstu do określonej ilości znaków, wstawianie na końcu linii ```"<br />"```
- ```strlen($t)``` - długość stringa
- ```ltrim($t)``` / ```rtrim($t)``` / ```trim($t)``` - usuwanie białych znakó z lewej / prawej / obu stron
- ```strstr($t, "do znalezienia")``` / ```strstr($t, "do znalezienia")``` - Znajduje tekst "do znalezienia" i zwraca od tego tekstu do końca (wliczając ten tekst) / wszystko przed tym tekstem
- ```stristr()``` - patrz wyżej, tylko bez zwracania uwagi na wielkość liter
- ```strcmp("zzz", "zzz")``` - porównywanie ciągów
 -- -1 - drugi większy niż pierwszy??
 -- 0 - takie same??
 -- 1 - pierwszy większy niż drugi??
- ```strpos("abcdefg", "cde")``` - zwraca pozycję tekstu w teście (integer) lub false (boolean, warto sprawdzać ```=== false```)
- ```str_replace("%i%", "Jan", "%i% to jest imię, %i%!");``` - zamiana tekstu ```%i%``` na ```Jan```
- ```str_ireplace``` - patrz wyżej, tylko bez zwracania uwagi na wielkość liter


### Data:
