<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0eb4e0abbbc0554544ca3b304ad334aa
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0eb4e0abbbc0554544ca3b304ad334aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0eb4e0abbbc0554544ca3b304ad334aa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0eb4e0abbbc0554544ca3b304ad334aa::$classMap;

        }, null, ClassLoader::class);
    }
}
