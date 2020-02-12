<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94ac896dfa936c94a54d3e887ed4255c
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'test\\src\\' => 9,
        ),
        'm' => 
        array (
            'mikehaertl\\wkhtmlto\\' => 20,
            'mikehaertl\\tmp\\' => 15,
            'mikehaertl\\shellcommand\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'test\\src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'mikehaertl\\wkhtmlto\\' => 
        array (
            0 => __DIR__ . '/..' . '/mikehaertl/phpwkhtmltopdf/src',
        ),
        'mikehaertl\\tmp\\' => 
        array (
            0 => __DIR__ . '/..' . '/mikehaertl/php-tmpfile/src',
        ),
        'mikehaertl\\shellcommand\\' => 
        array (
            0 => __DIR__ . '/..' . '/mikehaertl/php-shellcommand/src',
        ),
    );

    public static $classMap = array (
        'mikehaertl\\shellcommand\\Command' => __DIR__ . '/..' . '/mikehaertl/php-shellcommand/src/Command.php',
        'mikehaertl\\tmp\\File' => __DIR__ . '/..' . '/mikehaertl/php-tmpfile/src/File.php',
        'mikehaertl\\wkhtmlto\\Command' => __DIR__ . '/..' . '/mikehaertl/phpwkhtmltopdf/src/Command.php',
        'mikehaertl\\wkhtmlto\\Image' => __DIR__ . '/..' . '/mikehaertl/phpwkhtmltopdf/src/Image.php',
        'mikehaertl\\wkhtmlto\\Pdf' => __DIR__ . '/..' . '/mikehaertl/phpwkhtmltopdf/src/Pdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94ac896dfa936c94a54d3e887ed4255c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94ac896dfa936c94a54d3e887ed4255c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit94ac896dfa936c94a54d3e887ed4255c::$classMap;

        }, null, ClassLoader::class);
    }
}
