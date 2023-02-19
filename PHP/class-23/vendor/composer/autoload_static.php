<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3bd521631c41fb26c5ee9cfc9c3e856a
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3bd521631c41fb26c5ee9cfc9c3e856a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3bd521631c41fb26c5ee9cfc9c3e856a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3bd521631c41fb26c5ee9cfc9c3e856a::$classMap;

        }, null, ClassLoader::class);
    }
}