<?php include 'includes/header.php';

// arreglos asociativos
// similar a los objetos en java script
// SIMILAR A LOS DICCIONARIOS EN PYTHON

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<pre/>";
var_dump($cliente);
echo "<pre/>";

echo $cliente['nombre'];
echo $cliente['informacion']['tipo'];

//agregar más propiedades
$cliente['codigo'] = 25;
echo "<pre/>";
var_dump($cliente);
echo "<pre/>";


include 'includes/footer.php';