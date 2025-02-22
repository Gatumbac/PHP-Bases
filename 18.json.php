<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Computadora',
        'precio' => 400,
        'disponible' => true
    ],
    [
        'nombre' => 'Laptop',
        'precio' => 500,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitór',
        'precio' => 100,
        'disponible' => false
    ]
];

echo '<pre/>';
var_dump($productos);
echo '<pre/>';

echo '<pre/>';
$json = json_encode($productos,JSON_UNESCAPED_UNICODE);
$json_decode = json_decode($json);
var_dump($json);
var_dump($json_decode);
echo '<pre/>';





include 'includes/footer.php';