<?php include 'includes/header.php';

$clientes = array('Juan', 'Pedro', 'Gabriel');

foreach($clientes as $cliente) {
    echo $cliente, '<br/>';
}

for ($i = 0; $i < sizeof($clientes); $i++) {
    echo $clientes[$i], '<br/>';
}

$cliente = array(
    'saldo' => 900,
    'tipo' => 'premium',
    'nombre' => 'Juan'
);

// foreach recorre el arreglo asociativo por sus valores
foreach ($cliente as $valor) {
    echo $valor . '<br/>';
}

//recorrido por llaves
foreach ($cliente as $key => $valor) {
    echo $key . "-" . $valor . '<br/>';
}

//operador ternario
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
        'nombre' => 'Monitor',
        'precio' => 100,
        'disponible' => false
    ]
];

// Mezclando HTML y php dinámicamente.
foreach ($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre'] ?></p>
        <p>Producto: <?php echo $producto['precio'] ?></p>
        <p>Producto: <?php echo ($producto['disponible'] ? 'Disponible' : 'No disponible') ?></p>
    </li>
    <?php
}


include 'includes/footer.php';
