<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace strategy;

/**
 * Description of Subtraction
 *
 * @author alexandre.zubokoff
 */
class Subtraction implements CalculatorInterface
{
     /**
     * 
     * @param float $num1
     * @param float $num2
     * @return float
     */
    public function calculate($num1, $num2)
    {
        return $num1 - $num2;
    }

}
