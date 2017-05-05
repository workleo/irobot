<?php

namespace classes;

class IndexControl
{

    public function __construct()
    {
        session_start();
        $_SESSION['page']='start_page';
    }

    public function captcha($width,$height){
        echo CaptchaPreparator::prepare_captcha($width, $height);
    }

    public function ask_person (){
        echo Asking::ask_about_person();
    }
}