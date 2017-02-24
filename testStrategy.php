<?php

spl_autoload_register(function($class) {
    require_once str_replace("\\", "/", $class . ".php");
});

$sum = new strategy\Sum();
echo "Soma: " . $sum->calculate(2, 2) . "<br>";

$multiply = new strategy\Multiply();
echo "Multiplica: " . $multiply->calculate(2, 2) . "<br>";

$division = new strategy\Division();
echo "Divisão: " . $division->calculate(2, 2) . "<br>";

$subtraction = new strategy\Subtraction();
echo "Subtração: " . $subtraction->calculate(2, 2) . "<br>";
