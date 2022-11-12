<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb02e7cd2f8e4c7b1db78acca2cbc1cb
{
    public static $files = array (
        '94aaed329caf2c4c00b985af7033f09d' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb02e7cd2f8e4c7b1db78acca2cbc1cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb02e7cd2f8e4c7b1db78acca2cbc1cb::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitbb02e7cd2f8e4c7b1db78acca2cbc1cb::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitbb02e7cd2f8e4c7b1db78acca2cbc1cb::$classMap;

        }, null, ClassLoader::class);
    }
}
