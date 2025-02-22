<?php include 'includes/header.php';
// igual que en java o js
$autenticado = true;
$admin = true;

if($autenticado || $admin) {
    echo "El usuario está autenticado";
} else {
    echo "El usuario no está autenticado";
};

$cliente = array(
    'saldo' => 900,
    'tipo' => 'premium',
    'nombre' => 'Juan'
);

if (!empty($cliente)) {
    echo "El arreglo de cliente no está vacío";
    if ($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo";
    } else {
        echo "El cliente no tiene saldo";
    }
}

if ($cliente['saldo'] == 0) {
    echo "El cliente no tiene saldo";
} else if ($cliente['tipo'] === 'premium') {
    echo "El cliente es premium";
} else {
    echo "Cliente inválido";
}

// switch
$tecnologia = 'PHP';
$tecnologia = 'Java';

switch ($tecnologia) {
    case 'PHP':
        echo 'PHP, un excelente lenguaje de programación';
        break;
    
    default:
        echo 'Otro lenguaje de programación';
        break;
}


include 'includes/footer.php';