<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Zajęcia 2.</title>
</head>
<body>
<!--    ZD Jak wysłać do bieżącego pliku? -->
<!--    <form method="get" action="<?=($_SERVER["PHP_SELF"]) ?>">-->
<!--    <form method="get" action="">-->


    <form method="get" action="dane.php">
        Imię: <input type="text" name="imie" /><br />
        Nazwisko: <input type="text" name="nazwisko" /><br />
        <input type="submit" />

    </form>


    <br /><br /><br /><br />


    <form method="post" action="dane.php">
        Login: <input type="text" name="login" /><br />
        Hasło: <input type="password" name="haslo" /><br />
        <input type="submit" value="Wyślij" />

    </form>


    <br /><br /><br /><br />


    <form method="get" action="dane.php">

        <input type="radio" name="kolor" value="bialy" />Biały<br />
        <input type="radio" name="kolor" value="czarny" />Czarny<br />
        <input type="radio" name="kolor" value="zielony" />Zielony<br />
        <input type="radio" name="kolor" value="czerwony" />Czerwony<br />

        <input type="submit" value="Wybierz kolor" />

    </form>


</body>
</html>
