<?php

$fichero = fopen("texto.txt", "r");
$count = 0;


while (($text = fgets($fichero))!== false) {

    $count++;
    $words = explode(" ", $text);
    $array = array_splice($words, 2);
    $number = strlen(implode(" ", $array));
    $countWords =count($array);

    echo "Linea: $count ". $text. "tiene $countWords palabras -> y $number letras "."<br>";

}
