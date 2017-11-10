<?php
if(isset($_GET["id"])) {
    $id = $_GET["id"];

    $c = @new mysqli("localhost", "root", "", "przychodnia_4tb");

    if(!$c->connect_error) {

        $q = "DELETE FROM pacjenci WHERE pacjenci.id LIKE '$id'";

        if($res = $c->query($q)) {

            $c->close();

            // przekierowanie do innej strony
            header("location: ./index.php");

        } else {
            "Błąd zapytania.";
        }

        echo "OK";
    } else {
        echo "Błąd połączenia.";
    }
}


?>
