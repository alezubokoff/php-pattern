<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Singleton
 *
 * @author alexandre.zubokoff
 */

namespace singleton;

class Singleton
{

    private static $cont;

    public static function getInstance()
    {
        static $instance = null;
        if ($instance === null) {
            self::$cont++;
            $instance = new static();
        }
        return $instance;
    }

    /**
     * Evitar a instanciação da classe com o operador new
     */
    protected function __construct()
    {
        
    }

    /**
     * Evitar a clonagem da classe
     */
    private function __clone()
    {
        
    }

    public static function getCont()
    {
        return self::$cont;
    }

}
