<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../res/css/shadow.css">
    <style></style>
    <title>VALIDATOR</title>
</head>
<body style="background-color: black">
<form>
    <?php

    if ($_POST['captch'] != $_SESSION['captch']) {
        echo '<img src="../res/img/badrobot.gif" /><br>';
        echo '<div class="shadow font" style="max-width: 480px"> ' . 'You bad-bad robot!' . '</div>';
    } else {
        echo '<img src="../res/img/dancing-baby.gif" /><br>';
        echo '<div class="shadow bigfont" style="max-width: 220px">' . 'Congratulations! You are human !' . '</div>';

    }
    ?>
</form>
</body>
</html>
