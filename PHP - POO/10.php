<?php
//Consultar base de datos con poo y msqli

$db = new mysqli('localhost', 'root', 'root', 'bienesraices_crud');
$query = "SELECT titulo FROM PROPIEDADES";
$resultado = $db->query($query);
while ($propiedad = $resultado->fetch_assoc()) {
    echo $propiedad['titulo'], "<hr>";
}

//prepared statement
//Inserción
$email = "gabrielito11@gmail.com";
$pass = "12345";

//Creamos el query y lo preparamos
//Preparar consulta SQL
$stmt = $db->prepare("INSERT INTO USUARIOS (email, password) VALUES (?, ?)");

//Vincular los parametros (s = string, i = integer, d = double, b = blob)
$stmt->bind_param("ss", $email, $pass);

//ejecutar la consulta
if(!$stmt->execute()) {
    echo "Hubo un problema al ejecutar la consulta";
}

//Consultar base de datos con poo y msqli
//Prepared statemtn

//query
$query = "SELECT titulo, descripcion FROM PROPIEDADES";

//statement
$stmt = $db->prepare($query);

//ejecutar la consulta
$stmt->execute();

//Vincular el resultado con variables
$stmt->bind_result($titulo, $descripcion);

//obtener los resultados

while ($propiedad = $stmt->fetch()) {
    echo $titulo, $descripcion, "<hr>";
}

//cerrar conexión
$stmt->close();

// Cerrar la conexión
$db->close();