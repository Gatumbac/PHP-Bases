<?php
/*
require 'clases/Detalles.php';
require 'clases/Clientes.php';
Cuando se tienen muchas clases se vuelve tedioso y problemático tener tantos require
*/

//Autoload
function autoloadClases($clase) {
    $partes = explode('\\', $clase);
    require __DIR__ . '/clases/' . $partes[1] . '.php';
}

spl_autoload_register('autoloadClases');

$clientes = new App\Clientes();