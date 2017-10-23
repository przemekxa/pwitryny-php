<?php

//
// empty($cos) -> sprawdza czy zmienna jest pusta
//
// isset($cos) -> sprawdza czy wartość jest ustawiona
//
// header("location: formularz.php"); -> powrót do poprzedniej strony
//





if( empty($_GET["imie"]) || empty($_GET["nazwisko"]) ) {
    echo "Nie wprowadziłeś danych!<br />";
} else {
    $imie = $_GET["imie"];
    $nazwisko = $_GET["nazwisko"];
    echo "Twoje imię to: <span style='color:red'>", $imie, "</span>.",
    "<br />Twoje nazwisko to: <span style='color:red'>", $nazwisko, "</span>.";
}

echo "<br /><br /><br />";




if(!empty($_POST["login"]) && !empty($_POST["haslo"])) {

    $login = $_POST["login"];
    $haslo = $_POST["haslo"];

    echo "Login: ", $login, "<br />";
    echo "Hasło: ", $haslo, "<br />";

} else {
    echo "Nie wprowadziłeś wszystkich danych!<br />";
}

echo "<br /><br /><br />";



if( isset($_GET["kolor"]) ) {
    echo "Zaznaczyłeś kolor {$_GET["kolor"]}.<br />";
} else {
    //echo "Nie wybrałeś koloru!<br />";
    header("location: formularz.php");
}







?>
