<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Pliki i foldery</title>
</head>
<body>

    <ul>
    <?php

    $dir = "../test";
    if($fd = opendir($dir)) {

        while( ($plik = readdir($fd))!==FALSE ) {
            if($plik!="." && $plik!="..") {
                echo "<li>$plik</li>";
            }
        }

    } else exit("Nie mogę otworzyć katalogu \$dir");

    closedir($fd);

    ?>

    </ul>

</body>
</html>
