<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b904fa13c8307b1991e72e10a126325
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'peterkahl\\ChineseMaster\\' => 24,
            'peterkahl\\CharsetFromString\\' => 28,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Container\\' => 14,
            'Phpml\\' => 6,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'L' => 
        array (
            'LanguageDetector\\' => 17,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'peterkahl\\ChineseMaster\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpclasses/chinese-master/src',
        ),
        'peterkahl\\CharsetFromString\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpclasses/charset-from-string/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Phpml\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-ai/php-ml/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'LanguageDetector\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpclasses/language-detection/src/LanguageDetector',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JCrowe\\BadWordFilter\\' => 
            array (
                0 => __DIR__ . '/..' . '/jcrowe/bad-word-filter/src',
            ),
        ),
    );

    public static $classMap = array (
        'SentimentAnalyzer' => __DIR__ . '/..' . '/phpclasses/sentiment-analyzer/src/SentimentAnalyzer.class.php',
        'SentimentAnalyzerTest' => __DIR__ . '/..' . '/phpclasses/sentiment-analyzer/src/SentimentAnalyzer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b904fa13c8307b1991e72e10a126325::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b904fa13c8307b1991e72e10a126325::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit6b904fa13c8307b1991e72e10a126325::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6b904fa13c8307b1991e72e10a126325::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6b904fa13c8307b1991e72e10a126325::$classMap;

        }, null, ClassLoader::class);
    }
}
