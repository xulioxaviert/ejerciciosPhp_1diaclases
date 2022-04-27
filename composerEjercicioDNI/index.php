<?php

require_once('vendor/autoload.php');

use NifValidator\NifValidator;

$fichero = new NifValidator();


if($fichero->isValid('55555') != true) {
    echo "No valido";
}



/* 

//CIF
assert(NifValidator::isValid('B65410011'));
//DNI
assert(NifValidator::isValid('93471790C'));
//NIE
assert(NifValidator::isValid('X5102754C'));

 */