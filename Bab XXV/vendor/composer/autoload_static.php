<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb24ecb1ed56fb0194e2c871dac5252c3
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInitb24ecb1ed56fb0194e2c871dac5252c3::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
