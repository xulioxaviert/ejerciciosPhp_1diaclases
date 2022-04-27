<?php

require_once("autoload.php");
use Models\User as User;

/* $coche = new Coche("Marca","Modelo"); */


$maria = new User("Maria");

$maria->saludo();

echo "Hola";