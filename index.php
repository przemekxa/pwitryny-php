<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>

    <?php               // znacznik kanoniczny
        echo ("4Tb");
    ?>

    <?                  // znacznik typu SGML
        echo ("skrócony");
    ?>

    <!-- znaznik ASP, nie wykorzystywany w PHP7
        <%
        %>
    -->

    <!--
        <script language="php"></script>
    -->




    <?php

    // komenrtarz jednowierszowy
    # komentarz jednowierszowy
    /*
        komentarz w woelu liniach
    */

    // Wyświetlanie informacji

    echo ("aha<br />");
    echo 'tak';
    echo 18;
    echo "<br />Masz 18 lat";
    echo "<br />Masz ", 18, " lat";

    echo "<h2>Nagłówek</h2>";
    echo "<h2 style=\"color:red\">Czerwony 1</h2>";
    echo "<h2 style='color:red'>Czerwony 2</h2>";

    print "egzamin";



    ?>



</body>
</html>
