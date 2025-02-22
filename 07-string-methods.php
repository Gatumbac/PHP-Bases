<?php include 'includes/header.php';

$nombreCliente = '    Gabriel Tumbaco   ';

//len
echo strlen($nombreCliente);

//eliminar espacios al inicio y final
$texto = trim($nombreCliente);
echo $texto;

//convertir a mayuscula y minuscula
echo strtoupper($texto);
echo strtolower($texto);

//validacion de correos
$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";
var_dump($mail1 === $mail2);
var_dump(strtolower($mail1) === strtolower($mail2));

//reemplazar
echo str_replace('Gabriel', 'G', $texto);

//revisar si un string existe o no
echo strpos($texto, 'Gabriel'); // si no existe no manda nada

//concatenación
echo "<br/>";
$tipoCliente = "Premium";
echo "El cliente " . $texto . " es " . $tipoCliente;
echo "El cliente {$texto} es {$tipoCliente}"; 




include 'includes/footer.php';