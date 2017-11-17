<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Witaj <?php echo $_COOKIE["nazwa"] ?></title>
</head>
<body>

    <?php

        if(!isset($_COOKIE["nazwa"]) && empty($_GET["nazwa"])) {
            header("location: ./form.html");
        } else if(!empty($_GET["nazwa"])) {
            setcookie("nazwa", $_GET["nazwa"], time()+(60*60*24*365));
            include "./witaj.php";
        } else {
            include "./main.php";
        }

    ?>

</body>
</html>
