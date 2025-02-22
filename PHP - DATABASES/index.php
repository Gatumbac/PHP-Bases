<?php
    include __DIR__ . '/includes/funciones.php';
    
    $query = obtener_cajeros();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Salón de Belleza</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <div class="contenedor-estetica">
        <div class="imagen"></div>
        <div class="app">
            <header class="header">
                <h1>App Peluqueria</h1>
            </header>

            <div class="seccion">
                <h2>Cajeros</h2>
                <p class="text-center">Listado de cajeros a continuación</p>
                <div id="servicios" class="listado-servicios">
                    <?php
                        while ($cajero = mysqli_fetch_assoc($query)) { ?>
                            <div class="servicio">
                                <p class="nombre-servicio">
                                    <?php echo $cajero['nombre']; ?>
                                </p>
                                <p class="nombre-servicio">
                                    <?php echo $cajero['correo']; ?>
                                </p>
                            </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>