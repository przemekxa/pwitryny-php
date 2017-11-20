<?php

require_once("./klasaSamochod.php");


$auto1 = new Samochod();
echo $auto1->iloscKol;
$auto1->marka = "Tesla";
$auto1->model = "Model 3";

?>
