<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Połączenie z bazą danych</title>
    <link rel="stylesheet" href="styl.css" />
</head>
<body>

    <?php

    // Połączenie z serwerem

    // Sprawdzanie czy jest połączenie z MySQL
    if ($polaczenie = mysqli_connect("localhost", "root", "")) {
        echo "Połączyłeś się z serwerem.<br />";

        // Sprawdzenie czy jest baza danych
        if(mysqli_select_db($polaczenie, "weterynarz_4tb")) {

            echo "Połączyłeś się z bazą danych weterynarz_4tb.<br />";

            $sql = "SELECT * FROM `uslugi`";

            if($rezultat = mysqli_query($polaczenie, $sql)) {
                echo "Zapytanie wykonane poprawnie<br /><br />";

                // Wyświetlenie danych z bazy danych weterynarz_4tb
                echo <<<TABELA
                <table>
                <tr>
                    <th>id</th>
                    <th>nazwa</th>
                    <th>cena</th>
                </tr>
TABELA;

                while($w = mysqli_fetch_row($rezultat)) {
                    echo <<<WIERSZ
                    <tr>
                        <td>$w[0]</td>
                        <td>$w[1]</td>
                        <td>$w[2]</td>
                    </tr>
WIERSZ;
                }

                echo "</table>";


            } else {
                echo "Błąd w zapytaniu.<br />";
            }


        // Brak połączenia z bazą danych
        } else {
            echo "Nie połączyłeś się z bazą danych weterynarz_4tb.<br />";
        }


    // Brak połączenia z MySQL
    } else {
        echo "Nie połączyłeś się z serwerem.<br />";
    }

    mysqli_close($polaczenie);

    // ZD wkleić w odpowiednie miejsca

    ?>

</body>
</html>
