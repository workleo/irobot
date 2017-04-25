<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0e15eb4f40687620a56f5b85e5fc007
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Minho\\Captcha\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Minho\\Captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/lifei6671/php-captcha/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'classes' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0e15eb4f40687620a56f5b85e5fc007::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0e15eb4f40687620a56f5b85e5fc007::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite0e15eb4f40687620a56f5b85e5fc007::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}