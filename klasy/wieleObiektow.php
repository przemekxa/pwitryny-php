<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Wiele obiektów</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <?php

    require_once("./klasaSamochod.php");

    $auta = [];

    for($i=0; $i<3; $i++) {
        $auta[$i] = new Samochod("Polska");
    }

    $auta[0]->marka = "Ferrari";
    $auta[0]->model = "F430";

    $auta[1]->marka = "Audi";
    $auta[1]->model = "A8";

    $auta[2]->marka = "Tesla";
    $auta[2]->model = "Roadster";

    ?>

    <table>
        <tr><th>marka</th><th>model</th><th>kraj</th></tr>

        <?php

        foreach($auta as $auto) {
            echo "<tr>
                    <td>$auto->marka</td>
                    <td>$auto->model</td>
                    <td>$auto->produkcja</td>
            </tr>";
        }

        ?>

    </table>

</body>
</html>
