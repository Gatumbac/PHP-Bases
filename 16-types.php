<?php include 'includes/header.php';

// tipado más fuerte en php (semejante a java)
function verificarAuth() : String {
    return "El usuario está autenticado";
}

echo verificarAuth();

function verificarAuth1() : void {
    echo "User Auth";
}

verificarAuth1();


include 'includes/footer.php';