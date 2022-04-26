<?php

require_once ("Utils.php");

function suma(int $num1, int $num2): int
{
    echo "Funcion suma ";
    return $num1 + $num2;
}

$resultado = suma(7, 8);

/* echo $resultado; */

writeLine($resultado);




