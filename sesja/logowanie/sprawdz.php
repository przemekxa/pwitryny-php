<?php
session_start();

if(isset($_POST["zaloguj"]) &&
   !empty($_POST["login"]) &&
   !empty($_POST["password"])) {

    $db = new mysqli("localhost", "root", "", "logowanie_4tb");

    if(!$db->connect_error) {

        $login = $db->real_escape_string(htmlentities($_POST["login"]));
        $password =  $db->real_escape_string(htmlentities($_POST["password"]));

        if($res = $db->query("SELECT * FROM users WHERE login LIKE '$login' AND password LIKE '$password';")) {


            if($res->num_rows>=1) {
                $_SESSION["loggedIn"] = true;
                $_SESSION["username"] = $login;
                header("location: ./zalogowano.php");
            } else {
                $_SESSION["error"] = "Błędne dane logowania.";
                header("location: ./logowanie.php");
            }

        } else {
            $_SESSION["error"] = "Błąd zapytania.";
            header("location: ./logowanie.php");
        }




    } else {
        $_SESSION["error"] = "Błąd łączenia z bazą danych.";
        header("location: ./logowanie.php");
    }

} else {
    $_SESSION["error"] = "Nie wprowadziłeś wszystkich danych logowania.";
    header("location: ./logowanie.php");
}



?>
