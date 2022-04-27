<?php

require_once('vendor/autoload.php');



$logger = new \Monolog\Logger('prueba');
$logger->pushHandler(new \Monolog\Handler\StreamHandler('salida.log'));
$logger->error('Un mensaje de error');


use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('mi-fichero.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');