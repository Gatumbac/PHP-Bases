<?php
function obtener_cajeros() {
    try {
        //Importar las credenciales
        require 'database.php';
        
        //Consulta SQL
        $sql = "SELECT * FROM CAJERO;";

        //Realizar la consulta
        $query = mysqli_query($db, $sql);
        return $query;

    } catch (\Throwable $th) {
        var_dump($th);
    } finally {
        //Cerrar la conexion (opcional)
        mysqli_close($db);
    }
}