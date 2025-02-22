<?php include 'includes/header.php';
//tipado y parametros por default
function sumar(int $numero1 = 0, int $numero2 = 0) {
    echo $numero1 + $numero2;
}

sumar(10, 10);

// parametros nombrados

function verificar(int $numero1, int $numero2) {
    echo "El numero 1 es " . $numero1 . " y el numero 2 es " . $numero2;
}

verificar(numero2: 500, numero1: 85);

// permite modificar orden


include 'includes/footer.php';