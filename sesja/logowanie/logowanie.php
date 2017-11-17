<?php
session_start();
if(isset($_SESSION["loggedIn"])) header("location: ./zalogowano.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Logowanie</title>
</head>
<body>

    <h2>Logowanie do systemu</h2>

    <?php
    if(isset($_SESSION["error"])) {
        echo "<p>{$_SESSION['error']}</p>";
        unset($_SESSION["error"]);
    }
    ?>

    <form method="post" action="sprawdz.php">
        Login:<br />
        <input type="text" name="login" /><br /><br />
        Hasło:<br />
        <input type="password" name="password" /><br /><br />
        <input type="submit" name="zaloguj" value="Zaloguj" />
    </form>


</body>
</html>
