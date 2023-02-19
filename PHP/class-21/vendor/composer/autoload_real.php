<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitddde99d9bec8212445d04a287d2b4f2a
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

        spl_autoload_register(array('ComposerAutoloaderInitddde99d9bec8212445d04a287d2b4f2a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitddde99d9bec8212445d04a287d2b4f2a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitddde99d9bec8212445d04a287d2b4f2a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}