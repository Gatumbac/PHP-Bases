<?php include 'includes/header.php';

$carrito = ['Tablet', 'Computadora', 'TV'];
// verificar si un elemento existe
var_dump(in_array('Tablet', $carrito));

//ordenación de elementos
$numeros = [1,5,2,8,9,4,3,6,5,1,7,8,2];
sort($numeros); // de menor a mayor
rsort($numeros); // de mayor a menor

echo "<pre/>";
var_dump(($numeros));
echo "<pre/>";

// ORDENACIÓN ARREGLO ASOCIATIVO
$cliente = array(
    'saldo' => 900,
    'tipo' => 'premium',
    'nombre' => 'Juan'
);

echo "<pre/>";
var_dump(($cliente));
echo "<pre/>";

//ORDENA POR VALORES
// Primero números y luego por strings
asort($cliente);
echo "<pre/>";
var_dump(($cliente));
echo "<pre/>";

//ORDENA POR LLAVES EN ORDEN ALFABETICO
ksort($cliente);
echo "<pre/>";
var_dump(($cliente));
echo "<pre/>";

// krsort -> de la z a la a


include 'includes/footer.php';