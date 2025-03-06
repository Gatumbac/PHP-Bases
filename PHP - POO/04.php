<?php
declare(strict_types = 1);
//POO

//HERENCIA

/*
Permite a una clase (llamada clase hija) heredar propiedades y métodos de otra clase (llamada clase padre). Esto facilita la reutilización de código y la creación de jerarquías de clases.
*/

/*
La herencia permite a una clase hija heredar propiedades y métodos de una clase padre.

Se usa la palabra clave extends para establecer la herencia.

Los métodos y propiedades pueden ser sobrescritos en la clase hija.

Se puede acceder a métodos y propiedades del padre usando parent::.

PHP no soporta herencia múltiple directamente, pero se puede simular con traits.

Las clases abstractas son útiles para definir comportamientos comunes que deben ser implementados por las clases hijas.
*/

class Transporte {
    public function __construct(protected string $tipo, protected int $ruedas, protected int $capacidad){}

    public function getInfo() {
        echo '<hr>';
        return "El/la {$this->tipo} tiene {$this->ruedas} ruedas y puede movilizar a {$this->capacidad} personas";
    }
}

class Bicicleta extends Transporte {
    
}

class Automovil extends Transporte {
    public function __construct(protected string $tipo, protected int $ruedas, protected int $capacidad, protected string $transmision){}

    public function getInfo() {
        echo parent::getInfo() . " y tiene una transmision {$this->transmision}";
    }
    
}

$bicicleta = new Bicicleta('Bicicleta', 2, 1);
echo $bicicleta->getInfo();

$automovil = new Automovil('Auto', 4, 5, 'manual');
echo $automovil->getInfo();


