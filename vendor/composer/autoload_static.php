<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3c0eaed36f00251b6440d495ab84278
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInitd3c0eaed36f00251b6440d495ab84278::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInitd3c0eaed36f00251b6440d495ab84278::$classMap;

        }, null, ClassLoader::class);
    }
}
