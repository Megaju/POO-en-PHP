<?php
namespace App;
/**
 * Class Autoloader
 * @Package Tutoriel
 */
class Autoloader {
    /**
     * Enregistre notre Autoloader
     */
    static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    /**
     * Inclue le fichier correspondant à la class
     * @param $class string Le nom de la class
     */
    static function autoload($class) {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require __DIR__ . '/' . $class . '.php';
        }
    }
}
