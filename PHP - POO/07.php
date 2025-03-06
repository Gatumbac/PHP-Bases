<?php
declare(strict_types = 1);
//POO

//Polimorfismo

/*
El polimorfismo permite que objetos de diferentes clases sean tratados como objetos de una clase común, siempre que compartan una interfaz o una clase base.

El polimorfismo permite que objetos de diferentes clases sean tratados como objetos de una clase común.

Se logra mediante herencia (sobrescritura de métodos) o interfaces (implementación de métodos).

Es útil para escribir código flexible, reusable y fácil de mantener.

Ejemplos comunes incluyen el uso de métodos con el mismo nombre en diferentes clases o el uso de interfaces para garantizar comportamientos consistentes.
*/

interface TransporteInterfaz {

    public function getInfo() : string;

}

class Bicicleta implements TransporteInterfaz {

    public function __construct()
    {
    }

    public function getInfo() : string {
        echo '<hr>';
        return 'La bicicleta tiene 2 ruedas';
    }
}

class Automovil implements TransporteInterfaz {

    public function __construct()
    {
    }

    public function getInfo() : string {
        echo '<hr>';
        return 'El auto tiene cuatro ruedas';
    }
}



$bicicleta = new Bicicleta();
echo $bicicleta->getInfo();

$automovil = new Automovil();
echo $automovil->getInfo();



