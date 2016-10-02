<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1735b6f4fd0dadd2fd7e7ef58d1cdbf
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Acme\\QueryBuilder' => __DIR__ . '/../..' . '/src/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1735b6f4fd0dadd2fd7e7ef58d1cdbf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1735b6f4fd0dadd2fd7e7ef58d1cdbf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1735b6f4fd0dadd2fd7e7ef58d1cdbf::$classMap;

        }, null, ClassLoader::class);
    }
}