<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite76e113f64a7735e65d32d69af3371ac
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite76e113f64a7735e65d32d69af3371ac::$classMap;

        }, null, ClassLoader::class);
    }
}