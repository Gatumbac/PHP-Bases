<?php
declare(strict_types = 1);
//POO

//Abstraccion
class Producto {

    public function __construct(public string $nombre, public int $precio, public bool $disponible) 
    {
    }

    public function mostrarProducto() {
        echo "El producto es: " . $this->nombre . " y su precio es: $ " . $this->precio; 
    }
    
}

$producto = new Producto('Laptop', 200, true);
echo '<pre>';
var_dump($producto);
echo '</pre>';
$producto->mostrarProducto();
