<?php
declare(strict_types = 1);
//POO

//Métodos estáticos

/*
public: Accesible desde cualquier lugar.

private: Accesible solo desde dentro de la clase.

protected: Accesible desde dentro de la clase y desde las clases que heredan de ella.
*/

class Producto {

    public static $imagen = "imagen.jpg";

    public function __construct(protected string $nombre, protected int $precio, protected bool $disponible) 
    {
    }

    public static function obtenerProducto() {
        return "Obteniendo datos del producto... ";
    }

    public static function obtenerImagenProducto() {
        return self::$imagen;
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

//Sintaxis especial para acceder a métodos estáticos

echo Producto::obtenerProducto();
echo Producto::obtenerImagenProducto();


