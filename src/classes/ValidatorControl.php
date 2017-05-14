<?php

namespace classes;

class ValidatorControl
{
    private $postCaptha;
    private $sessionPage;
    private $imgSrc;
    private $header;
    private $answer;




    public function __construct()
    {
        session_start();

        $this->postCaptha = null;
        if (isset($_POST['captch'])) $this->postCaptha = $_POST['captch'];

        $this->sessionPage = null;
        if (isset($_SESSION['page'])) $this->sessionPage = $_SESSION['page'];

        if (($this->sessionPage != null) && ($this->sessionPage == 'start_page')
            && ($this->postCaptha != null)
        ) {
            if (strtolower($_POST['captch']) != strtolower($_SESSION['captch'])) {
                $this->imgSrc = '../res/img/badrobot.gif';
                $this->answer = 'You bad-bad robot!';
                $this->header = 'Refresh: 3;url=../index.php';


            } else {
                $this->imgSrc = '../res/img/dancing-baby.gif';
                $this->answer = "Congratulations!\n You are human !";
                $this->header = 'Refresh: 3; url=proFile.html';

            }
        } else {
            $this->answer = 'I\'ll be back!';
            $this->header = 'Refresh: 3;url=../index.php';
            $this->imgSrc = '../res/img/mbeback.jpg';
        }

       echo header($this->header);
    }


    public function img_src(){
        return $this->imgSrc;
    }


    public function textAnswer()
    {
        return $this->answer;
    }


}