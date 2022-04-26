<?php

class PasswordValidator
{
    var $pass;

    function __construct($pass)
    {
        $this->pass = $pass;
    }

    function charValue($passValue)
    {
        $array = ['.', ',', '-', '_', ';'];
        $state = false;
        foreach ($array as $char) {

            
            if (strpos($passValue, $char) !== false) {
                $state = true;
            }
        }
        return $state;
    }

    function isValid($passValue)
    {
        return strlen($passValue) >= 8 && $this->charValue($passValue) ? true : false;
    }
}
