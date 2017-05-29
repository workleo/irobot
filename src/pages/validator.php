<?php
require_once __DIR__.'/../../vendor/autoload.php';
use classes\ValidatorControl as VC;

try {
    $vc=new VC();
    $loader = new Twig_Loader_Filesystem('../pages');
    $twig = new Twig_Environment($loader);


    echo $twig->render('validator.html', array(
        'picture' => $vc->imgSrc(),
        'answer' => $vc->textAnswer(),
        array('auto_reload' => true)
    ));


} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
};
