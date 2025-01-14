<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30c970b69b02682aaf513a4331563603
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Product\\Announcer\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Product\\Announcer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit30c970b69b02682aaf513a4331563603::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30c970b69b02682aaf513a4331563603::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit30c970b69b02682aaf513a4331563603::$classMap;

        }, null, ClassLoader::class);
    }
}
