<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47c241af4e34849bdd55b934fd1f6151
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47c241af4e34849bdd55b934fd1f6151::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47c241af4e34849bdd55b934fd1f6151::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47c241af4e34849bdd55b934fd1f6151::$classMap;

        }, null, ClassLoader::class);
    }
}
