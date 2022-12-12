<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46953289f30b94292d25224b32276330
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'devbrunosoares\\CafeApi\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'devbrunosoares\\CafeApi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit46953289f30b94292d25224b32276330::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46953289f30b94292d25224b32276330::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit46953289f30b94292d25224b32276330::$classMap;

        }, null, ClassLoader::class);
    }
}
