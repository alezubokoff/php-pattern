<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace strategy;

/**
 * Description of Division
 *
 * @author alexandre.zubokoff
 */
class Division implements CalculatorInterface
{
     /**
     * 
     * @param float $num1
     * @param float $num2
     * @return float
     */
    public function calculate($num1, $num2)
    {
        if($num1 > 0 && $num2 > 0){
            return $num1 / $num2;
        }
        return "Não foi possivel realizar divisão";
    }

}
