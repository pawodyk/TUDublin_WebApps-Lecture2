<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19fa8b1cd6d13c1e90d67f45d6dec7d4
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TUDublin\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TUDublin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit19fa8b1cd6d13c1e90d67f45d6dec7d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19fa8b1cd6d13c1e90d67f45d6dec7d4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
