<!-- Enunciado:

Escribir un programa creando una función que pasado un
array de números nos diga la suma de todos ellos

Objetivo:

Practicar con funciones y arrays.
 -->
<?php

$numeros = explode(",", $_GET['a']);
$resultado;


function sumaNumeros($array)
{
    $resultado = 0;
    foreach ($array as $numero) {
        $resultado = $resultado + $numero;
    }
    echo "El resultado de la suma de todos los numeros es $resultado <br>";
}

sumaNumeros($numeros);

/* echo "El resultado de la suma de todos los numeros es $resultado"; */

/* ------------------------↓ Codigo de Pitel ↓------------------------- */

echo "El resultado de la suma de todos los numeros es " . array_sum($numeros);