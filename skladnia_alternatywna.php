<?php

// Instrukcja if

$x = 2;
$y = 44;
if($x<$y) {
    echo "Zmienna x mniejsza od zmiennej y.<br />";
}

if($x < $y):
    echo "Zmienna x mniejsza od zmiennej y.<br /><br />";
endif;



// Instrukcja if else

$a = 100;
$b = 3;
if($a < $b) {
    echo "a mniejsze od b<br />";
} else {
    echo "a nie jest mniejsza od zmiennej b<br />";
}

if($a < $b):
    echo "a mniejsze od b<br />";
else:
    echo "a nie jest mniejsza od zmiennej b<br />";
endif;



// Instrukcja if else if

if($a < $b):
    echo "a mniejsze od b<br /><br />";
elseif($a == $b):
    echo "a jest równa zmiennej b<br /><br />";
else:
    echo "a jest większa od zmiennej b<br /><br />";
endif;



// Instrukcja switch

$a = 1;

switch ($a) {
    case 0: echo "Zero<br />"; break;
    case 1: echo "Jeden<br />"; break;
    case 2: echo "Dwa<br />"; break;
}

switch ($a):
    case 0: echo "Zero<br />"; break;
    case 1: echo "Jeden<br />"; break;
    case 2: echo "Dwa<br />"; break;
endswitch;



// Pętla for

for($x=0; $x<10; $x++) {
    echo "$x, ";
}

for($x=0; $x<10; $x++):
    echo "$x, ";
endfor;

echo "<br />";



// Pętla foreach

$tab = [1, 2, 3, 4, 5];
foreach($tab as $klucz => $wartosc) {
    echo "$klucz = $wartosc<br />";
}

foreach($tab as $klucz => $wartosc):
    echo "$klucz = $wartosc<br />";
endforeach;



// Pętla while

$i = 1;
while($i<=3) {
    echo "$i ";
    $i++;
}

while($i<=5):
    echo "$i ";
    $i++;
endwhile;
echo "<br />";



// Break

for($i=0; ; $i++):
    echo "Zmienna \$i wynosi $i<br />";
    if($i == 5):
        break;
    endif;
endfor;



// Continue

for($i=0; $i<10; $i++):
    if($i % 2 != 0):
        continue;
    endif;
    echo "Zmienna: $i<br />";
endfor;


?>
