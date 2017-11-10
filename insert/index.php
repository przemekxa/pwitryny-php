<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Przychodnia - dodawanie danych</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>

<?php

    $p = @new mysqli("localhost", "root", "", "przychodnia_4tb");

    // Zmiana kodowania znaków
    $p->set_charset("utf8");

    if(!$p->connect_errno) {

        $sort = "id";
        if(isset($_GET["sort"])) $sort = $_GET["sort"];

        if($r = $p->query("SELECT id, imie, nazwisko, choroby_przewlekle, uczulenia, choroba, leki_przepisane FROM pacjenci ORDER BY $sort;")) {

            echo "<table><tr>
            <th><a href='?sort=id'>id</a></th>
            <th><a href='?sort=imie'>imię</a></th>
            <th><a href='?sort=nazwisko'>nazwisko</a></th>
            <th><a href='?sort=choroby_przewlekle'>choroby przewlekłe</a></th>
            <th><a href='?sort=uczulenia'>uczulenia</a></th>
            <th><a href='?sort=choroba'>choroba</a></th>
            <th><a href='?sort=leki_przepisane'>leki przepisane</th>
            </tr>";

            while($w = $r->fetch_assoc()) {
                echo <<<WIERSZ
                <tr>

                <td>{$w['id']}</td>
                <td>{$w['imie']}</td>
                <td>{$w['nazwisko']}</td>
                <td>{$w['choroby_przewlekle']}</td>
                <td>{$w['uczulenia']}</td>
                <td>{$w['choroba']}</td>
                <td>{$w['leki_przepisane']}</td>

                </tr>
WIERSZ;
            }

            echo "</table>";


        } else echo "Błędne zapytanie.<br />";


    } else echo "Błąd : ".$p->connect_errno.".<br />";

?>
    <br />
    <form action="insert.php" method="post">
        <input type="text" name="imie" placeholder="imię" /><br /><br />
        <input type="text" name="nazwisko" placeholder="nazwisko" /><br /><br />
        <input type="text" name="choroby_przewlekle" placeholder="choroby przewlekłe" /><br /><br />
        <input type="text" name="uczulenia" placeholder="uczulenia" /><br /><br />
        <input type="text" name="choroba" placeholder="choroba" /><br /><br />
        <input type="text" name="leki_przepisane" placeholder="leki przepisane" /><br /><br />
        <textarea name="opis" rows="4" cols="40">opis...</textarea><br /><br />
        <input type="submit" name="przycisk" value="Dodaj pacjenta" />
    </form>


</body>
</html>
