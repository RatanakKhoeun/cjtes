<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita7e2cf237a3ef157c1a8fcc41a2d44d0
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInita7e2cf237a3ef157c1a8fcc41a2d44d0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita7e2cf237a3ef157c1a8fcc41a2d44d0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita7e2cf237a3ef157c1a8fcc41a2d44d0::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInita7e2cf237a3ef157c1a8fcc41a2d44d0::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirea7e2cf237a3ef157c1a8fcc41a2d44d0($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirea7e2cf237a3ef157c1a8fcc41a2d44d0($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
