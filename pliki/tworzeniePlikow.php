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
        <input type="submit" name="wyslij" value="Dodaj folder" />
    </form>

    <br />

    <form>
        Dodaj plik:<br />
        <input type="text" name="plik" />
        <input type="submit" name="wyslijPlik" value="Dodaj plik" />
    </form>
    <br />



    <?php

    $dir = "../test";



    //
    // dodaj folder
    //

    if(isset($_GET["wyslij"]) && isset($_GET["folder"])) {

        $folder = $_GET["folder"];

        if(!file_exists("$dir/$folder")) {

            mkdir("$dir/$folder");

        } else echo "Folder \"$folder\" już istnieje<br /><br />";

    }



    //
    // dodaj plik
    //

    if(isset($_GET["wyslijPlik"]) && isset($_GET["plik"])) {

        $plik = $_GET["plik"];

        if(!file_exists("$dir/$plik")) {

            if($fd = fopen("$dir/$plik", "w")) {
                if(file_exists("$dir/$plik")) {
                    echo "Dodano plik \"$plik\"<br /><br />";
                }
                fclose($fd);
            }

        } else echo "Plik \"$plik\" już istnieje<br /><br />";

    }



    //
    // usuwanie danych
    //

    if(isset($_GET["deleteDir"])) {
        $delete = $_GET["deleteDir"];
        if(file_exists("$dir/$delete")) rmdir("$dir/$delete");
    }

    if(isset($_GET["deleteFile"])) {
        $delete = $_GET["deleteFile"];
        if(file_exists("$dir/$delete")) unlink("$dir/$delete");
    }



    //
    // wyświetlanie - nowe
    //

    if(!($folder = opendir($dir))) {
        exit("Nie można otworzyć folderu.");
    } else {
        $sort = 0;
        $pliki = [];
        $katalogi = [];

        $dane = scandir($dir, $sort);     // 1 - malejąco; 0 i inne - rosnąco

        foreach($dane as $x) {
            if($x != "." && $x != "..") {
                if(is_file("$dir/$x")) $pliki[] = $x;
                else $katalogi[] = $x;
            }
        }

        closedir($folder);

        if(isset($_GET["sort"])) {
            $sort = $_GET["sort"];
            if($sort==0) {
                sort($pliki);
                sort($katalogi);
            } else {
                rsort($pliki);
                rsort($katalogi);
            }
        }

        echo "<p>Pliki:<br /><ul>";
        foreach($pliki as $plik) {
            echo "<li>$plik <a href='?deleteFile=$plik'>usuń</a></li>";
        }
        echo "</ul></p>";

        echo "<p>Katalogi:<br /><ul>";
        foreach($katalogi as $katalog) {
            echo "<li>$katalog <a href='?deleteDir=$katalog'>usuń</a></li>";
        }
        echo "</ul></p>";

    }


    ?>

    </ul>

    <br />
    Sortuj:
    <a href="?sort=0">rosnąco</a>
    <a href="?sort=1">malejąco</a>


</body>
</html>
