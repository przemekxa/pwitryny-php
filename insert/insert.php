<?php

if(
    !empty($_POST["przycisk"]) &&
    !empty($_POST["imie"]) &&
    !empty($_POST["nazwisko"]) &&
    !empty($_POST["choroby_przewlekle"]) &&
    !empty($_POST["uczulenia"]) &&
    !empty($_POST["choroba"]) &&
    !empty($_POST["leki_przepisane"]) &&
    isset($_POST["opis"])
) {

    $c = new mysqli("localhost", "root", "", "przychodnia_4tb");

    if(!$c->connect_error) {

        $c->set_charset("utf8");

        $imie = $c->real_escape_string(htmlentities($_POST["imie"]));
        $nazwisko = $c->real_escape_string(htmlentities($_POST["nazwisko"]));
        $choroby_przewlekle = $c->real_escape_string(htmlentities($_POST["choroby_przewlekle"]));
        $uczulenia = $c->real_escape_string(htmlentities($_POST["uczulenia"]));
        $choroba = $c->real_escape_string(htmlentities($_POST["choroba"]));
        $leki_przepisane = $c->real_escape_string(htmlentities($_POST["leki_przepisane"]));
        $opis = $c->real_escape_string(htmlentities($_POST["opis"]));

        $q = "INSERT INTO pacjenci VALUES (
        DEFAULT,
        '$imie',
        '$nazwisko',
        '$choroby_przewlekle',
        '$uczulenia',
        '$choroba',
        '$leki_przepisane',
        '$opis'
        );";

        if($res = $c->query($q)) {
            $c->close();
            header("location: ./index.php");
        } else echo "Błąd zapytania";

        echo "Brak błędu";
    } else echo "Błąd połączenia z bazą danych";


} else header("location: ./index.php");

?>
