

    <?php

    $valor = $_GET["fichero"];




    //$valor = "hola.exe";
    //$valor = "hola.exe";

    if (str_ends_with($valor, ".exe")) {
        echo "ends with .exe";
    } else if (str_ends_with($valor, ".db")) {

        echo "ends with .db";
    } else {
        echo "";
    };


    ?>