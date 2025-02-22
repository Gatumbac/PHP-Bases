<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);

echo "<br/>";
var_dump($numero1 < $numero2);
var_dump($numero2 >= $numero3);

// < , > , <=, >=
// al igual que java script existe un operador más estricto para comparar
var_dump( $numero3 == $numero4 ); // true
var_dump( $numero3 === $numero4 ); //false

// operador especial de comparacion
var_dump($numero2 <=> $numero1);
// retorna -1 si el de la izquierda es menor
// retorna 0 si son iguales
// retorna 1 si el de la izquierda es mayor




include 'includes/footer.php';