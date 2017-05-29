<?php
require_once __DIR__ . '/../vendor/autoload.php';
use classes\IndexControl;

try {
    $ic = new IndexControl();
    $loader = new Twig_Loader_Filesystem('/');
    $twig = new Twig_Environment($loader);


    echo $twig->render('index.html', array(
        'captcha' => $ic->captcha(300, 100),
        'person' => $ic->askPerson(),
        array('auto_reload' => true)
    ));


} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
};

