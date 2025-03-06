<?php
declare(strict_types = 1);
//POO

//Encapsulación

/*
public: Accesible desde cualquier lugar.

private: Accesible solo desde dentro de la clase.

protected: Accesible desde dentro de la clase y desde las clases que heredan de ella.
*/

class Producto {

    public function __construct(protected string $nombre, protected int $precio, protected bool $disponible) 
    {
    }

    public function mostrarProducto() {
        echo "El producto es: " . $this->nombre . " y su precio es: $ " . $this->precio; 
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
    
}

$producto = new Producto('Laptop', 200, true);
echo '<pre>';
var_dump($producto);
echo '</pre>';
$producto->mostrarProducto();
echo '<br>';
$producto->setNombre('Laptop Gamer');
echo $producto->getNombre();
