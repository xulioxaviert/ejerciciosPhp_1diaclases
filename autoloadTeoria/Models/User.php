<?php

namespace Models;

class User
{
    var $user;
    var $pass;

    function __construct($user)
    {
        $this->user = $user;
        
    }

function saludo() {
    echo "Hola".$this->user;
}

}
