<?php include 'includes/header.php';
// include 
/* 
Incluye otros archivos php para reutilizarlos y hacer un programa más modularizado. (Headers, footers HTML)
-> arroja warnings en caso de rutas inválidas
*/

// OTRA FORMA
// require -> simplemente detiene completamente el script si la ruta específicada no se encuentra disponible. (fatal error)

/*
include: Incluye un archivo y continúa ejecutándose si el archivo no se encuentra.
require: Incluye un archivo y detiene la ejecución si el archivo no se encuentra.
include_once: Incluye un archivo solo una vez y continúa ejecutándose si el archivo no se encuentra.
require_once: Incluye un archivo solo una vez y detiene la ejecución si el archivo no se encuentra.
*/
include 'includes/footer.php';