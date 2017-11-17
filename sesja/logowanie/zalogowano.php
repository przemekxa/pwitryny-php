<?php
session_start();
if(!isset($_SESSION["loggedIn"])) {
    $_SESSION["error"] = "Dostęp do strony wymaga zalogowania.";
    header("location: ./logowanie.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Logowanie</title>
</head>
<body>

    <h2>Zalogowany do systemu</h2>
    <h3>Użytkownik: <?php echo $_SESSION["username"]; ?></h3>

    <a href="wyloguj.php?wyloguj">Wyloguj</a>


</body>
</html>
