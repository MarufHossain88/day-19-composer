<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4addf4a4d343b3ad2d973d3df398983f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4addf4a4d343b3ad2d973d3df398983f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4addf4a4d343b3ad2d973d3df398983f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
