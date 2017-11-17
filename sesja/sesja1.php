<?php
session_start();
$_SESSION["imie"] = "Oliwia";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Sesja</title>
</head>
<body>

    Witamy
    <?php echo $_SESSION["imie"]; ?>
    na stronie.

    <br /><br />

    Identyfikatorem sesji jest:
    <?php echo session_id(); ?>

    <br /><br />

    <a href="sesja1_1.php">Następna strona</a>

</body>
</html>
