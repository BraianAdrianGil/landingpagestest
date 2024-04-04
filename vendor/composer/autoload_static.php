<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2542a0f96c7c4f089345d10e50b9eeb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2542a0f96c7c4f089345d10e50b9eeb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2542a0f96c7c4f089345d10e50b9eeb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc2542a0f96c7c4f089345d10e50b9eeb::$classMap;

        }, null, ClassLoader::class);
    }
}
