<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author alexandre.zubokoff
 */

namespace factory;

class Person
{
    private $name;
    private $email;
    
    function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    
    public function __toString()
    {
        return "Name: " . $this->name . " Email: " . $this->email;
    }
}
