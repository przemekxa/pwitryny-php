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

    $sort = 0;
    if(isset($_GET["sort"])) $sort = $_GET["sort"];

    $pliki = scandir($dir, $sort);  // 1 - malejąco; 0 i inne - rosnąco

    foreach($pliki as $p) {

        if($p != "." && $p != "..") {
            echo "<li>$p</li>";
        }

    }

    ?>

    </ul>
    Sortuj:
    <a href="?sort=0">rosnąco</a>
    <a href="?sort=1">malejąco</a>

</body>
</html>
