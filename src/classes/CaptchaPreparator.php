<?php

namespace classes;

use Minho\Captcha\CaptchaBuilder;

class CaptchaPreparator
{
    static public function prepare_captcha($_width,$_height)
    {
        $captch = new CaptchaBuilder();
        $captch->initialize([
            'width' => $_width,
            'height' =>$_height,
            'line' => true,
            'curve' => true,
            'noise' => 8,
            'fonts' => []
        ]);

        $captch->create();

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['captch'] = $captch->getText();
        ob_start();
        $captch->save(null,5);
        $output = ob_get_contents();
        ob_end_clean();

        echo '<img src="data:image/png;base64,'.base64_encode($output).'" />';
        $captch->destroy();
    }
}