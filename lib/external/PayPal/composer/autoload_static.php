<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitddf6726757c04c8de8443463a9140734
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitddf6726757c04c8de8443463a9140734::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitddf6726757c04c8de8443463a9140734::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitddf6726757c04c8de8443463a9140734::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}