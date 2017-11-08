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

    if(!$p->connect_errno) {

        if($r = $p->query("SELECT id, imie, nazwisko, choroby_przewlekle, uczulenia, choroba, leki_przepisane FROM pacjenci;")) {

            echo "<table><tr><th>id</th><th>imię</th><th>nazwisko</th><th>choroby przewlekłe</th><th>uczulenia</th><th>choroba</th><th>leki przepisane</th><th>usuń</th></tr>";

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
                <td><a href='delete.php?id={$w['id']}'>usuń</a></td>

                </tr>
WIERSZ;
            }

            echo "</table>";


        } else echo "Błędne zapytanie.<br />";


    } else echo "Błąd : ".$p->connect_errno.".<br />";

?>


</body>
</html>
