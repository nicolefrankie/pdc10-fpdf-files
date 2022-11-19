<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite64b3b4489b2c6e2d0bef6a89da4caee
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

        spl_autoload_register(array('ComposerAutoloaderInite64b3b4489b2c6e2d0bef6a89da4caee', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite64b3b4489b2c6e2d0bef6a89da4caee', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite64b3b4489b2c6e2d0bef6a89da4caee::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}