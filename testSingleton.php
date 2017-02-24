<?php

spl_autoload_register(function($class) {
    require_once str_replace("\\", "/", $class . ".php");
});

$singleton = singleton\Singleton::getInstance();
echo "Instancia 1 => " . singleton\Singleton::getCont() . "<br />";

$singleton2 = singleton\Singleton::getInstance();
echo "Instancia 2 => " . singleton\Singleton::getCont() . "<br />";

$singleton3 = singleton\Singleton::getInstance();
echo "Instancia 3 => " . singleton\Singleton::getCont() . "<br />";
