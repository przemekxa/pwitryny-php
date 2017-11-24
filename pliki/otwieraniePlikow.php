<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Otwieranie plików</title>
</head>
<body>

    <?php

    $wolneMiejsce = disk_free_space("/");   // w bajtach
    $wolneMiejsce = round($wolneMiejsce / (1024*1024*1024), 2);     // w GiB

    $partycja = disk_total_space("/");      // w bajtach
    $partycja = round($partycja / (1024**3), 2);

    echo "Wolne miejsce na partycji: $wolneMiejsce GiB.<br />";
    echo "Wielkość partycji: $partycja GiB.<br /><br />";

    $dir = "../test";
    $plik = "matura.txt";

    if(!$fd = @fopen("$dir/$plik", "rb")) {
        echo "Nie mogę otworzyć pliku $plik";
    } else {
        $rozmiar = filesize("$dir/$plik");
        $tekst = fread($fd, $rozmiar);
        fclose($fd);
    }


    ?>

    <form>
        <textarea cols="100" rows="20" name="area"><?php echo $tekst; ?></textarea>
        <br />
        <input type="submit" name="zapisz" value="Zapisz" />
    </form>
    <br />

    <?php

    if(isset($_SESSION["message"])) {
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
    }

    if(isset($_GET["zapisz"])) {
        $nowyTekst = $_GET["area"];
        if($fd = fopen("$dir/$plik", "wb")) {
            if(fwrite($fd, $nowyTekst)==FALSE) {
                fclose($fd);
                echo "Błąd zapisu<br />";
            } else {
                fclose($fd);
                $_SESSION["message"] = "Zmodyfikowano zawartość pliku $plik";
                header("location: ./otwieraniePlikow.php");
            }
        } else echo "Nie mogę otworzyć pliku o nazwie $plik";
    }

    ?>


</body>
</html>
