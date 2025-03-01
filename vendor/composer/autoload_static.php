<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43147f0ae7187162038d42867a3ad670
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\Object\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\Object\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit43147f0ae7187162038d42867a3ad670::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit43147f0ae7187162038d42867a3ad670::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit43147f0ae7187162038d42867a3ad670::$classMap;

        }, null, ClassLoader::class);
    }
}
