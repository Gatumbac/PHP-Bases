<?php
declare(strict_types = 1);
//POO

//CLASES ABSTRACTAS

/*
Una clase abstracta es una clase que no puede ser instanciada directamente, pero puede ser heredada. Puede contener métodos abstractos (sin implementación) que deben ser implementados por las clases hijas.
*/

abstract class Transporte {
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

// $transporte = new Transporte('Transporte', 4, 5); -> error


