<?php

/* Detectar si un número es capicúa (o palíndromo) */

$valor =  $_GET["valor"];


if($valor === strrev($valor)) {
    echo "El string es Capicua";
} else {
    echo "El String No es Capicua";
};
