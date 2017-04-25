<?php
require_once __DIR__ . '/../vendor/autoload.php';
use classes\Asking;
use classes\CaptchaPreparator;

session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./res/css/shadow.css">
    <style>
    </style>
    <title>
        I ROBOT ?
    </title>
</head>

<body style="background-color: black">
<br/>
<?php CaptchaPreparator::prepare_captcha(300, 100) ?>
<br/>

<form action="./pages/validator.php" method="post" title="I ROBOT?">
    <label  >
        <?php echo '<div  class="shadow bigfont" align="left" style="max-width: 300px; left: 0">' . Asking::ask_about_person() . '</div>' ?>
        <input class="shadow bigfont" type="text" name="captch" style="width: 300px"/>
        <br>
        <input class="shadow bigfont" type="submit"  name="send" value="Check" style="width: 100px;margin-left: 100px;"/>
    </label>


</form>
</body>
</html>


