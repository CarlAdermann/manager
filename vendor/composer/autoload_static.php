<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c9c7b1aa2667edcb888f38c44ddada6
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carsguide\\Tests\\' => 16,
            'Carsguide\\ServiceManager\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carsguide\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Carsguide\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/carsguide/servicemanager',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c9c7b1aa2667edcb888f38c44ddada6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c9c7b1aa2667edcb888f38c44ddada6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
