<?php include 'includes/header.php';

$i = 0;
while ($i <= 10) {
    echo $i, "<br/>";
    $i++;
}

$j = 100;
do {
    echo "do while", "<br/>";
} while ($j <= 10);

// for loop
// recorrer n cantidad de veces
for($i = 1; $i < 16; $i++) {
    $condicion1 = $i % 3 == 0;
    $condicion2 = $i % 5 == 0; 
    if ($condicion1) {
        echo "fizz", "<br/>";
    } else if ($condicion2) {
        echo "buzz", "<br/>";
    } else if ($condicion1 && $condicion2) {
        echo "FIZZ BUZZ", "<br/>";
    }
}


include 'includes/footer.php';