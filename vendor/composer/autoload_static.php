<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb45404c84f0ffc8156ae02e0114ed51a
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Phplint\\' => 8,
        ),
        'F' => 
        array (
            'FOA\\Html_View_Bundle\\_Config\\' => 29,
        ),
        'A' => 
        array (
            'Aura\\View\\_Config\\' => 18,
            'Aura\\View\\' => 10,
            'Aura\\Html\\_Config\\' => 18,
            'Aura\\Html\\' => 10,
            'Aura\\Di\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Phplint\\' => 
        array (
            0 => __DIR__ . '/..' . '/phplint/phplint/Phplint',
        ),
        'FOA\\Html_View_Bundle\\_Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/foa/html-view-bundle/config',
        ),
        'Aura\\View\\_Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/view/config',
        ),
        'Aura\\View\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/view/src',
        ),
        'Aura\\Html\\_Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/html/config',
        ),
        'Aura\\Html\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/html/src',
        ),
        'Aura\\Di\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/di/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb45404c84f0ffc8156ae02e0114ed51a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb45404c84f0ffc8156ae02e0114ed51a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}