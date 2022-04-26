<?php

file_put_contents("mi-fichero.txt", "Esta es la primera linea.\n", FILE_APPEND);

echo "fichero guardado";

$contenido = file_get_contents("mi-fichero.txt");

echo str_replace("\n", "<br>", $contenido);
