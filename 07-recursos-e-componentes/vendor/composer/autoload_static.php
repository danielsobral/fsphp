<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2bb86cd7cb3b5c462ee306092b0c45a
{
    public static $files = array (
        'e471bf351add62873bc0289ccd6a937f' => __DIR__ . '/..' . '/league/plates/src/Template/match.php',
        '152c98af9456eeb8f53697d6a7dfd689' => __DIR__ . '/..' . '/league/plates/src/Extension/Data/data.php',
        'e20239a76b73b9912f51f0005956d1db' => __DIR__ . '/..' . '/league/plates/src/Extension/Path/path.php',
        'd513f8e004e152493580ca1917e308ba' => __DIR__ . '/..' . '/league/plates/src/Extension/RenderContext/func.php',
        '27980683f1626a3fd1405d27b171c0fe' => __DIR__ . '/..' . '/league/plates/src/Extension/RenderContext/render-context.php',
        'bdc465a053da7f7ddb072631f6d41d45' => __DIR__ . '/..' . '/league/plates/src/Extension/LayoutSections/layout-sections.php',
        'afa76803f24616d7599be3b7b0846adc' => __DIR__ . '/..' . '/league/plates/src/Extension/Folders/folders.php',
        '16c5be35e32c6cf916d875518b909210' => __DIR__ . '/..' . '/league/plates/src/Util/util.php',
        '91cd0160b6ec2ef2a478c93fa0e17d70' => __DIR__ . '/../..' . '/source/Support/Config.php',
        'e2ebdf2eb22f43083223815c9e01b93a' => __DIR__ . '/../..' . '/source/Support/Helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WebPConvert\\' => 12,
        ),
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'I' => 
        array (
            'ImageMimeTypeGuesser\\' => 21,
        ),
        'C' => 
        array (
            'CoffeeCode\\Uploader\\' => 20,
            'CoffeeCode\\Cropper\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WebPConvert\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/webp-convert/src',
        ),
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'ImageMimeTypeGuesser\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/image-mime-type-guesser/src',
        ),
        'CoffeeCode\\Uploader\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/uploader/src',
        ),
        'CoffeeCode\\Cropper\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/cropper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2bb86cd7cb3b5c462ee306092b0c45a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2bb86cd7cb3b5c462ee306092b0c45a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2bb86cd7cb3b5c462ee306092b0c45a::$classMap;

        }, null, ClassLoader::class);
    }
}
