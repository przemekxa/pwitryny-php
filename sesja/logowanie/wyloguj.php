<?php
session_start();

if(isset($_GET["wyloguj"])) {
    unset($_SESSION["loggedIn"]);
    unset($_SESSION["username"]);
    $_SESSION["error"] = "Wylogowano.";
}
header("location: ./logowanie.php");

?>
