<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5835ae155b4340cc2ef1492506a4fbdd
{
    public static $files = array (
        'a2672f9eb9a79f8ea46a7f148da1023d' => __DIR__ . '/..' . '/conveyancer/config/src/infrastructure.php',
        '5c016548aebafcba470a64f25d96dd78' => __DIR__ . '/..' . '/conveyancer/config/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'server\\connector\\' => 17,
        ),
        'c' => 
        array (
            'conveyancer\\tool\\' => 17,
            'conveyancer\\staticize\\' => 22,
            'conveyancer\\logger\\' => 19,
            'conveyancer\\framework\\' => 22,
            'conveyancer\\config\\' => 19,
            'conveyancer\\app\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'server\\connector\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'conveyancer\\tool\\' => 
        array (
            0 => __DIR__ . '/..' . '/conveyancer/tool/src',
        ),
        'conveyancer\\staticize\\' => 
        array (
            0 => __DIR__ . '/..' . '/conveyancer/framework/lib',
        ),
        'conveyancer\\logger\\' => 
        array (
            0 => __DIR__ . '/..' . '/conveyancer/logger/src',
        ),
        'conveyancer\\framework\\' => 
        array (
            0 => __DIR__ . '/..' . '/conveyancer/framework/src',
        ),
        'conveyancer\\config\\' => 
        array (
            0 => __DIR__ . '/..' . '/conveyancer/config/src',
        ),
        'conveyancer\\app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'server\\connector\\tool39ab32c5aeb56c9f5ae17f073ce31023' => __DIR__ . '/../..' . '/server/connector/tool39ab32c5aeb56c9f5ae17f073ce31023.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5835ae155b4340cc2ef1492506a4fbdd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5835ae155b4340cc2ef1492506a4fbdd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5835ae155b4340cc2ef1492506a4fbdd::$classMap;

        }, null, ClassLoader::class);
    }
}
