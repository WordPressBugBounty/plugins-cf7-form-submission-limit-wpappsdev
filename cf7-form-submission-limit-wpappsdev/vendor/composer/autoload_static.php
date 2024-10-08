<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0def435b1b32f7b85eb11661c5479069
{
    public static $files = array (
        '27c371aca6975e3ce078bbbdbd8c82c6' => __DIR__ . '/../..' . '/includes/helper-functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPAppsDev\\CF7SL\\' => 16,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPAppsDev\\CF7SL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0def435b1b32f7b85eb11661c5479069::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0def435b1b32f7b85eb11661c5479069::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0def435b1b32f7b85eb11661c5479069::$classMap;

        }, null, ClassLoader::class);
    }
}
