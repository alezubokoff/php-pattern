<?php

spl_autoload_register(function($class) {
    require_once str_replace("\\", "/", $class . ".php");
});

echo "<b>Factory</b> <br>";
echo factory\PersonFactory::getInstance("Alexandre Zubokoff", "alezubokoff@gmail.com");
