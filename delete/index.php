<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Przychodnia - usuwanie danych</title>
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
            <th>usuń</th>
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
                <td><a href='delete.php?id=$w[id]'>usuń</a></td>

                </tr>
WIERSZ;
            }

            echo "</table>";


        } else echo "Błędne zapytanie.<br />";


    } else echo "Błąd : ".$p->connect_errno.".<br />";

?>


</body>
</html>
