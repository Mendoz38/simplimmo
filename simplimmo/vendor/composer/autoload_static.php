<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit491374ffc651413c03484a14dd7266c5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Simplimmo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Simplimmo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit491374ffc651413c03484a14dd7266c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit491374ffc651413c03484a14dd7266c5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit491374ffc651413c03484a14dd7266c5::$classMap;

        }, null, ClassLoader::class);
    }
}
