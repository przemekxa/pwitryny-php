<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Weterynarz</title>
    <link rel="stylesheet" href="weterynarz.css" />
</head>
<body>
    <div id="baner">
        <h1>GABINET WETERYNARYJNY</h1>
    </div>
    <div id="lewy">
        <h2>PSY</h2>

        <!-- skrypt 1. -->
        <?php

        // polskie znaki
        $pol = mysqli_connect("localhost", "root", "", "weterynarz_4tb");

        mysqli_set_charset($pol, "utf8");

        $q = "SELECT id, imie, wlasciciel FROM `zwierzeta` WHERE rodzaj = 1;";
        if($res = mysqli_query($pol, $q)) {
            while ($w = mysqli_fetch_array($res)) {
                echo "{$w['id']} {$w['imie']} {$w['wlasciciel']}<br />";
            }
        }

        ?>

        <h2>KOTY</h2>

        <!-- skrypt 2. -->
        <?php

        $q = "SELECT id, imie, wlasciciel FROM `zwierzeta` WHERE rodzaj = 2;";
        if($res = mysqli_query($pol, $q)) {
            while ($w = mysqli_fetch_array($res)) {
                echo "{$w['id']} {$w['imie']} {$w['wlasciciel']}<br />";
            }
        }

        ?>
    </div>
    <div id="srodkowy">
        <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>

        <!-- skrypt 3. -->
        <?php

        $q = "SELECT imie, telefon, szczepienie, opis FROM `zwierzeta`";
        if($res = mysqli_query($pol, $q)) {
            while($w = mysqli_fetch_array($res)) {
                echo <<<PACJENT
                Pacjent: {$w['imie']}<br />
                Telefon właściciela: {$w['telefon']},
                ostatnie szczepienie : {$w['szczepienie']},
                informacje: {$w['opis']}<br />
                <hr />
PACJENT;

            }
        }

        mysqli_close($pol);

        ?>
    </div>
    <div id="prawy">
        <h2>WETERYNARZ</h2>
        <p>Krzysztof Nowakowski, lekarz weterynarii</p>
        <h2>GODZINY PRZYJĘĆ</h2>
        <table>
            <tr><td>Poniedziałek</td><td>15:00 - 19:00</td></tr>
            <tr><td>Wtorek</td><td>15:00 - 19:00</td></tr>
        </table>
    </div>

</body>
</html>
