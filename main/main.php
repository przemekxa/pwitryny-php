<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>

    <?php

    echo "<h2 style='text-align:center'>";
    echo "AaBbCcDd";
    echo "</h2>";

    //include "imie.php";       // po blędzie wyświetla się dalsza część

    include "../imie.php";

    @include "imie.php";        // nie wyświetla błędów

    require "../imie.php";

    /*

    include -> wyświetla warning, realizuje kod dalej
    @include -> nie wyświetla błedu, realizuje kod dalej
    require -> wyświetla fatal error, NIE realizuje kodu dalej
    @require -> nie wyświetla fatal error, NIE realizuje kodu dalej

    */


    echo "<br />Tekst po błędzie";


    ?>



</body>
</html>
