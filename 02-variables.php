<?php include 'includes/header.php';

// las variables se pueden declarar múltiples veces
$nombre = 'Gabo';
$nombre = 'Gabo2';
echo $nombre;

//variables constantes (o finales)
define('constante', 'variables constantes');
echo constante;
const constante2 = 'hola 2';
echo constante2;

// forma estandar $nombreCliente o $nombre_cliente


include 'includes/footer.php';