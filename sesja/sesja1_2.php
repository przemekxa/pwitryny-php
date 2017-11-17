<?php
    session_start();
    unset($_SESSION["imie"]);       // usunięcie zmiennej z sesji
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Sesja</title>
</head>
<body>

    <?php echo $_SESSION["imie"], " na drugiej stronie." ?>

    <br /><br />

    <?php echo session_id(); ?>

    <br /><br />

    <a href="sesja1.php">Początkowa strona</a>

</body>
</html>
