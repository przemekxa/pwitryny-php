<?php
    session_start();
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

    <a href="sesja1_2.php">Następna strona</a>

</body>
</html>
