<?php

class Coche
{
var $marca;
var $modelo;
var $km;
var $gas;

function __construct($marca, $modelo)
{
$this->marca = $marca;
$this->modelo = $modelo;
$this->km = 0;
$this->gas = 0;
}


function repostar($cantidadGas)

{
$this->gas += $cantidadGas;
echo "Repostando";
}
}