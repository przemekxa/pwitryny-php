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

    <?php echo $_SESSION["imie"]; ?>

    <br /><br />

    <?php echo session_id(); ?>


</body>
</html>
