   <?php

    $palabra = $_REQUEST["palabra"];
    $fichero = $_FILES["fichero"]["tmp_name"];

    //print_r($fichero);

    $contenido = file_get_contents($fichero);

    //$numPalabras = substr_count($contenido, $palabra);
    $numPalabras = substr_count(strtolower($contenido), strtolower($palabra));

    echo "La palabra $palabra se repite $numPalabras veces en el texto";


    ?>