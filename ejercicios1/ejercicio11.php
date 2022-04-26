<?php 

/* 
$searchWords = ['que', 'porque', 'gu', 'bu', 'igual', '¡', '¿', 'qu', 'ci', 'ce', 'cu', 'co', 'ca'];
$replaceWords = ['k', 'xq', 'w', 'w', '=', '', '', 'k', 'zi', 'ze', 'ku', 'ko', 'k'];
 */



$text = "El cuervo abrió el pico y graznó; fue un chillido agudo de miedo, y los jirones de niebla gris que se arremolinaban a su alrededor se desgarraron como un velo, y vio que el cuervo no era tal, sino una mujer, una criada de larga cabellera negra a la que había visto antes. ¿Dónde? En Invernalia, claro, la recordaba bien; y entonces se dio cuenta de que estaba en Invernalia, en una cama, en una habitación helada en la cima de una torre, y la mujer de pelo negro dejó caer la palangana de agua, que se estrelló contra el suelo, y corrió escaleras abajo gritando: «Está despierto, está despierto, está despierto». Bran se tocó la frente, entre los ojos. Aún le quemaba la zona que el cuervo le había picoteado, pero no tenía nada, ni sangre ni herida alguna. Se sentía débil y mareado. Trató de salir de la cama, pero no pudo.";


function milenialice($text)
{
    $searchWords = ['que', 'porque', 'gu', 'bu', 'igual', '¡', '¿', 'qu', 'ci', 'ce', 'cu', 'co', 'ca'];
    $replaceWords = ['k', 'xq', 'w', 'w', '=', '', '', 'k', 'zi', 'ze', 'ku', 'ko', 'k'];
    $newText = str_replace(
        $searchWords,
        $replaceWords,
        strtolower($text),
    );
    for ($i = 0; $i < strlen($newText); $i++) {
        $newText[$i] = rand(0, 10) > 7 ? strtoupper($newText[$i]) : $newText[$i];
    }

    echo "$newText";
}



milenialice($text);