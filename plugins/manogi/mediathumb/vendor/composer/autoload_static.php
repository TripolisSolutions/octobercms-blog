<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c3de2f9e71443bc1a465e7aa469c6e4
{
    public static $files = array (
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c573a7e5893a138545b4829bb4a11fcc' => __DIR__ . '/..' . '/manogi/mediathumb/resize_helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Urodoz\\Truncate\\' => 16,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'I' => 
        array (
            'Intervention\\Image\\' => 19,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Urodoz\\Truncate\\' => 
        array (
            0 => __DIR__ . '/..' . '/urodoz/truncate-html/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Intervention\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c3de2f9e71443bc1a465e7aa469c6e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c3de2f9e71443bc1a465e7aa469c6e4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
