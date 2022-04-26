<!-- Crear un código que pasado un número, nos diga si es par o impar. -->


<?php

$numero = isset($_GET["numero"])? (is_numeric($_GET["numero"])? $_GET["numero"] : 5) : 5;



if( $numero % 2 == 0 ) {
    echo "numero par";
} else {
    echo "numero impar";
};



