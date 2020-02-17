<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite988df933620f8b7ef46239a700cc7d5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PostgreSQLTutorial\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PostgreSQLTutorial\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite988df933620f8b7ef46239a700cc7d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite988df933620f8b7ef46239a700cc7d5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}