<?php

namespace Autoload;

/**
 * Class autoloader. This avoids having to use require. 
 * Classes will be loaded automatically with the use of namespaces.
 */
class Autoloader
{
    /**
     * Autoloader registration. 
     * Each call of the autoload method will be saved 
     * in the __autoload() stack of php.
     * @return void
     */
    public static function register(): void
    {
        // __CLASS__ for use the current class
        spl_autoload_register(array(__CLASS__, 'autoload')); 
    }

    /**
     * Dynamic class loading
     * @param string $class
     * @return string
     */
    public static function autoload(string $class): mixed
    {
        $class = str_replace('\\', '/', $class);
       
        // Path to the different classes
        $paths = array(
            implode(DS, [ROOT, 'Router']),
            implode(DS, [ROOT, 'Controllers']),
            implode(DS, [ROOT, 'library']),
            implode(DS, [ROOT])
        );

        // Look for the class file in the different directories
        foreach($paths as $path) {
            $file = implode(DS, [$path, $class . '.php']);
            if (file_exists($file)) {
                return require_once($file);
            }
        }
    }
}