<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author alexandre.zubokoff
 */

namespace strategy;

interface CalculatorInterface
{
    /**
     * 
     * @param float $num1
     * @param float $num2
     * @return float
     */
    public function calculate($num1, $num2);
}
