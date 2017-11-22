<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Pliki i foldery</title>
</head>
<body>

    <form>
        Dodaj folder:<br />
        <input type="text" name="folder" />
        <input type="submit" name="wyslij" value="Dodaj" />
    </form>
    <br />



    <?php

    $dir = "../test";


    // dodaj folder

    if(isset($_GET["wyslij"]) && isset($_GET["folder"])) {

        $folder = $_GET["folder"];

        if(!file_exists("$dir/$folder")) {

            mkdir("$dir/$folder");

        } else echo "Folder już istnieje<br /><br />";

    }


    // pokaz zawartosc folderu

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
