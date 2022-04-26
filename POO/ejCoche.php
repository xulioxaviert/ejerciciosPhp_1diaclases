<?php

require_once("Coche.php");

echo "hola<br>";

$cocheOpel = new Coche("Opel", "Astra");

$cocheOpel->repostar(129);
$cocheOpel->repostar(50);
$cocheOpel->repostar(50);

$cocheBMW = new Coche("BMW", "132");

$cocheBMW->repostar(500);

$listadoDeCoche = [
    $cocheBMW,
    $cocheOpel
];

foreach ($listadoDeCoche as $coche) {
    # code...
}