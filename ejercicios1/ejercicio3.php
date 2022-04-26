<!-- Crear un código que pasado un número nos diga cuántas veces es
necesario elevarlo para que pase de 10.000
Ej: si el número es 150, el resultado es 2 => 1502 > 10.000
Ej: si el número es 5, el resultado es 6 => 56 > 10.000 -->


<?php

$numero = isset($_GET["numero"]) ? (is_numeric($_GET["numero"]) ? $_GET["numero"] : 4) : 4;

$resultado = $numero;
$index = 1;

while ($resultado < 10000) {
    $resultado = $resultado * $numero;
    $index++;

};

echo "Si el numero es $numero, el resultado es $resultado ==>  y la pontecia es $index" ;