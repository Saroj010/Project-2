<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2abb4c647466454c3e76b90d6dbf980
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'dell\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'dell\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2abb4c647466454c3e76b90d6dbf980::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2abb4c647466454c3e76b90d6dbf980::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
