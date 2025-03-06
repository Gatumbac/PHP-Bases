<?php
/*
require 'clases/Detalles.php';
require 'clases/Clientes.php';
Cuando se tienen muchas clases se vuelve tedioso y problemático tener tantos require
*/

//Autoload
function autoloadClases($clase) {
    require __DIR__ . '/clases/' . $clase . '.php';
}

spl_autoload_register('autoloadClases');

$detalles = new Detalles();
echo '<hr>';
$clientes = new Clientes();
