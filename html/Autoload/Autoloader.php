<?php

namespace Autoload;

class Autoloader
{
    public static function register(): void
    {
        spl_autoload_register(array(__CLASS__, 'autoload')); 
    }

    public static function autoload(string $class): string
    {
        $class = str_replace('\\', '/', $class);
       
        $paths = array(
            implode(DS, [ROOT, 'Router']),
            implode(DS, [ROOT, 'Controllers']),
            implode(DS, [ROOT])
        );

        foreach($paths as $path) {
            $file = implode(DS, [$path, $class . '.php']);
            if (file_exists($file)) {
                return require_once($file);
            }
        }
    }
}