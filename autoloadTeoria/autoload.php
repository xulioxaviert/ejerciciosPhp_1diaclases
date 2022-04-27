<?php

spl_autoload_register(function ($nombreClase) {
include $nombreClase . '.php';

});