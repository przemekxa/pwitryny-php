<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Nasze hobby</title>
    <link rel="stylesheet" href="hobby.css" />
</head>
<body>

    <div id="baner">
        <h1>FORUM HOBBYSTYCZNE</h1>
    </div>

    <div id="lewy">

        <?php

        if(
            isset($_POST["rejestruj"]) && !empty($_POST["nick"]) &&
            !empty($_POST["hobby"]) && !empty($_POST["zawod"]) &&
            !empty($_POST["plec"]) && !empty($_POST["login"]) &&
            !empty($_POST["haslo"])
        ) {
            $nick = $_POST["nick"];
            $hobby = $_POST["hobby"];
            $zawod = $_POST["zawod"];
            $plec = $_POST["plec"];
            $login = $_POST["login"];
            $haslo = $_POST["haslo"];

            echo "Konto $nick zostało zarejestrowane na forum hobbystycznym";

            $db = @new mysqli("localhost", "root", "", "forum_4tb");

            if(!$db->connect_error) {

                $db->set_charset("utf8");

                $nick = $db->real_escape_string(htmlentities($nick));
                $hobby = $db->real_escape_string(htmlentities($hobby));
                $zawod = $db->real_escape_string(htmlentities($zawod));
                $plec = $db->real_escape_string(htmlentities($plec));
                $login = $db->real_escape_string(htmlentities($login));
                $haslo = $db->real_escape_string(htmlentities($haslo));

                $db->query("INSERT INTO uzytkownicy values (DEFAULT, '$nick', '$hobby', '$zawod', '$plec');");

                $db->query("INSERT INTO konta values (DEFAULT, '$login', '$haslo');");

                $db->close();

            }

        }


        ?>

    </div>

    <div id="prawy">
        <h3>TEMATYKA FORUM</h3>
        <ul>
            <li>Hodowla zwierząt</li>
            <ul>
                <li>psy</li>
                <li>koty</li>
            </ul>
            <li>Muzyka</li>
            <li>Gry komputerowe</li>
        </ul>

    </div>

</body>
</html>
