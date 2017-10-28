<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ciągi znaków - zadanie domowe</title>
</head>
<body>

    Wprowadź tekst do cenzury:
    <form method="get">
        <textarea name="tekst"></textarea><br />
        <input type="submit" value="Cenzuruj" />
    </form><br /><br />

    <div>
        <?php

            function cenzuruj($t) {
                $p = array("kurde", "kurdę", "kurczę", "kurka");
                $w = str_replace($p, "*", $t);
                return $w;
            }

            if ( !empty($_GET["tekst"]) ) {
                echo cenzuruj($_GET["tekst"]);
            }
        ?>
    </div><br /><br /><br />

    Obliczanie ilości wystąpeń w tekście:
    <form method="get">
        <textarea name="tekst2"></textarea><br />
        Tekst do wyszukania:<input type="text" name="szukaj" /><br />
        Niewrazliwość na wielkość liter: <input type="checkbox" name="niewrazliwosc" /><br />
        <input type="submit" value="Szukaj" />
    </form><br /><br />

    <div>
        <?php

            function wystapienia($tekst, $szukane, $nw) {

                $pos = $nw ? stripos($tekst, $szukane) : strpos($tekst, $szukane);

                if($pos === false) {
                    return 0;
                } else {
                    $i = 0;

                    while($pos !== false) {
                        $i++;
                        $tekst = substr($tekst, $pos+1);
                        $pos = $nw ? stripos($tekst, $szukane) : strpos($tekst, $szukane);
                    }

                    return $i;

                }

            }

            if(!empty($_GET["tekst2"]) && !empty($_GET["szukaj"])) {
                if($_GET["niewrazliwosc"] == "on") {
                    $nw = true;
                } else {
                    $nw = false;
                }
                echo "Wystąpienia: ", wystapienia($_GET["tekst2"], $_GET["szukaj"], $nw), ".";
            }

        ?>
    </div>


</body>
</html>
