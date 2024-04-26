<?php
class Autoloader
{
    public static function register(String $directory): void
    {
        spl_autoload_register(function ($class) use ($directory):bool {
            $file = __DIR__ . "/{$directory}/" . str_replace('\\', '/', $class) . '.php';
            if (file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }
}