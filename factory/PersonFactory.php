<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace factory;

/**
 * Description of PessoaFactory
 *
 * @author alexandre.zubokoff
 */
class PersonFactory
{
    public static function getInstance($name, $email){
        return new Person($name, $email);
    }
}
