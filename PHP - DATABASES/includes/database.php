<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "supermercado";

$db = mysqli_connect($servername, $username, $password, $dbname);

if (!$db) {
    echo "Hubo un error al conectar con la base de datos";
    exit;
}

