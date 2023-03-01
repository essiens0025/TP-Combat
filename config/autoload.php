<?php
class Autoloader{

/**
 * Enregistre notre autoloader
 */
static function register(){
    spl_autoload_register(array(__CLASS__, 'autoload'));
}

/**
 * Inclue le fichier correspondant à notre classe
 * @param $class string Le nom de la classe à charger
 */
static function autoload($class){
    require ('classes/' . $class . '.php');
}

}

// Enregistre notre autoloader
Autoloader::register();

// Instanciation des classes
$archer = new Archer();
$guerrier = new Guerrier();
$mage = new Mage();

