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
<form action="profile.php">
    <?php

    if (isset($_POST['captch']) && isset($_SESSION['page1'])) {

        if (strtolower($_POST['captch']) != strtolower($_SESSION['captch'])) {
            echo '<img src="../res/img/badrobot.gif" /><br>';
            echo '<div class="shadow font" style="max-width: 480px"> ' . 'You bad-bad robot!' . '</div>';
            header('Refresh: 3;url=../index.php');
        } else {
            echo '<img src="../res/img/dancing-baby.gif" /><br>';
            echo '<div class="shadow bigfont" style="max-width: 220px">' . 'Congratulations! You are human !' . '</div>';
            header('Refresh: 3; url=profile.php');
        }

    } else {
        echo '<div class="shadow font" style="max-width: 480px"> ' . 'I\'ll be back!' . '</div>';
        header('Refresh: 3;url=../index.php');
    }
    ?>
</form>
</body>
</html>
