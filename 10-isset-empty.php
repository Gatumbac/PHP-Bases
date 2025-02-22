<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = ['Juan', 'Gabriel'];

//empty - revisa si un arreglo está vacío
var_dump(empty($clientes));
var_dump(empty($clientes3));

//isset - revisar si un arreglo está creado o una propiedad está definida
var_dump( isset($clientes4) ); // si existe no devuelve nada

$clientes5 = [
    'nombre' => 'Gabriel',
    'apellido' => 'Tumbaco'
];

// revisa si existen propiedades definidas en arreglos asociativos
var_dump(isset($clientes5['edad']));




include 'includes/footer.php';