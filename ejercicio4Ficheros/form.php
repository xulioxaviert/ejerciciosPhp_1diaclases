<?php
require_once('Utils.php');
$password = "12345,678";
$validador = new PasswordValidator($password);

echo $password."<br>";
echo $validador->isValid($password) ? "Pass valida" : "No valida";

