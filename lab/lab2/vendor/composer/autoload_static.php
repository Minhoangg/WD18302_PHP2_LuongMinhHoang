<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit848826d5457950a468c0bcf1dc18fd2e
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit848826d5457950a468c0bcf1dc18fd2e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit848826d5457950a468c0bcf1dc18fd2e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit848826d5457950a468c0bcf1dc18fd2e::$classMap;

        }, null, ClassLoader::class);
    }
}
