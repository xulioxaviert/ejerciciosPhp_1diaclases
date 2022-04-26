<?php

require_once("Usuario.php");

$user = new User("Paco", "1234");

echo "<br> El usuario es $user->user y la contraseña es: ". "$user->pass";