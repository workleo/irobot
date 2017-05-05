<?php
require_once __DIR__.'/../../vendor/autoload.php';
use classes\ValidatorControl as VC;
$vc=new VC();
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
    <img style="max-width: 240px" src="<? $vc->img_src() ?>" /><br>
    <div class="shadow font" style="word-wrap: break-word; max-width: 240px"> <? $vc->textAnswer(); ?></div>
</form>
</body>
</html>
