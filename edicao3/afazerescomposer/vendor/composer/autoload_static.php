<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83bbeb61bc07b70473982c150307b0b3
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tarefas\\Models\\' => 15,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tarefas\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit83bbeb61bc07b70473982c150307b0b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit83bbeb61bc07b70473982c150307b0b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit83bbeb61bc07b70473982c150307b0b3::$classMap;

        }, null, ClassLoader::class);
    }
}