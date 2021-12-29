<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93488fb2ab2950ecfb93ac15a9cc656a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\views\\' => 10,
            'App\\resources\\' => 14,
            'App\\lib\\' => 8,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/views',
        ),
        'App\\resources\\' => 
        array (
            0 => __DIR__ . '/../..' . '/resources',
        ),
        'App\\lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'App\\lib\\Router' => __DIR__ . '/../..' . '/lib/Router.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93488fb2ab2950ecfb93ac15a9cc656a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93488fb2ab2950ecfb93ac15a9cc656a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit93488fb2ab2950ecfb93ac15a9cc656a::$classMap;

        }, null, ClassLoader::class);
    }
}
