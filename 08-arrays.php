<?php include 'includes/header.php';

// $carrito = array();
$carrito = ['Tablet', 'Television', 'Computadora'];

//sintaxis especial de etiquetas html para una mejor visualización
echo "<pre/>";
var_dump($carrito);
echo "<pre/>";

//indexacion
echo $carrito[1];

//agregar elementos
$carrito[3] = 'Nuevo Producto';

//funciones
array_push($carrito, 'Audifonos');
array_unshift($carrito, 'Mouse');


echo "<pre/>";
var_dump($carrito);
echo "<pre/>";

$clientes = array('Cliente1', 'Cliente2', 'Cliente3');
var_dump($clientes);


include 'includes/footer.php';