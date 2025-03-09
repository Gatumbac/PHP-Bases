<?php
//conectar a la base de datos con 

//Sin stmt
$db = new PDO("mysql:host=localhost; dbname=bienesraices_crud", 'root', 'root');
$query = 'SELECT titulo FROM propiedades';

$propiedades = $db->query($query);

while($propiedad = $propiedades->fetch()) {
    echo $propiedad['titulo'], '<hr>';
}

//Con smtm 

$stmt = $db->prepare($query);
$stmt->execute();

while($propiedad = $stmt->fetch()) {
    echo $propiedad['titulo'], '<hr>';
}

$stmt2 = $db->prepare($query);
$stmt2->execute();
//con fetchall
$resultado = $stmt2->fetchAll(PDO::FETCH_ASSOC);
foreach($resultado as $propiedad) {
    echo $propiedad['titulo'], '<hr>';
}