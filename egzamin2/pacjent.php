<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Przychodnia</title>
    <link rel="stylesheet" href="przychodnia.css" />
</head>
<body>

    <div id="baner">
        <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
    </div>
    <div id="lewy">
        <h3>LISTA PACJENTÓW</h3>

        <!-- skrypt 1 -->
        <?php

        $connection = @new mysqli("localhost", "root", "", "przychodnia_4tb");

        if($connection->connect_errno) {
            echo "Błąd: ".$connection->connect_errno.".<br />";
            // connect_errno
            // connect_error

            // 0 - prawidłowe połączenie
            // 1044 - user
            // 1045 - hasło
            // 1049 - baza danych
            // 2002 - błąd serwera

        } else {
            // prawidłowe połączenie

            if($res = $connection->query("SELECT id, imie, nazwisko FROM `pacjenci`;")) {

                while($w = $res->fetch_assoc()) {
                    echo "{$w['id']} {$w['imie']} {$w['nazwisko']}<br />";
                }

            } else echo "Błędne zapytanie<br />";

        }

        echo <<<FORM

        <br /><br />

        <form action="pacjent.php" method="get">

            Podaj id:<br />
            <input type="number" name="id" />
            <input type="submit" value="Pokaż dane" name="przycisk" />

        </form>
FORM;

        ?>



        <h3>LEKARZE</h3>
        <ul>
            <li>pn - śr</li>
            <ol>
                <li>Anna Kwiatkowska</li>
                <li>Jan Kowalewski</li>
            </ol>
            <li>czw - pt</li>
            <ol>
                <li>Krzysztof Nowak</li>
            </ol>
        </ul>

    </div>

    <div id="prawy">

        <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>

        <?php

            if(isset($_GET["przycisk"]) && isset($_GET["id"])) {
                $id = $_GET["id"];

                if($r = $connection->query("SELECT imie, nazwisko, choroby_przewlekle, uczulenia FROM `pacjenci` WHERE id = '$id';")) {

                $w = $r->fetch_assoc();
                echo <<<PACJENT
                    <p>Imię i nazwisko: {$w['imie']} {$w['nazwisko']}</p>
                    <p>Choroby przewlekłe: {$w['choroby_przewlekle']}</p>
                    <p>Uczulenia: {$w['uczulenia']}</p>
PACJENT;


                } else echo "Blędne zapytanie.<br />";

            }

            $connection->close();

        ?>


    </div>
    <div id="stopka">
        <p>utworzone przez: 000000000</p>
        <a href="kwerendy.txt">Pobierz plik z kwerendami</a>
    </div>


</body>
</html>
