<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite62d99ae21b3347186ffd57363e69dd0
{
    public static $classMap = array (
        'PHPGangsta_GoogleAuthenticator' => __DIR__ . '/..' . '/phpgangsta/googleauthenticator/PHPGangsta/GoogleAuthenticator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite62d99ae21b3347186ffd57363e69dd0::$classMap;

        }, null, ClassLoader::class);
    }
}