<?php
declare(strict_types = 1);
//POO

//Interfaces

/*
Las interfaces definen un contrato que las clases deben cumplir.

Una clase puede implementar múltiples interfaces.

Los métodos en una interfaz son públicos y no tienen implementación (antes de PHP 8.1).

A partir de PHP 8.1, las interfaces pueden tener métodos predeterminados.

Las interfaces son útiles para garantizar que diferentes clases tengan comportamientos consistentes.
*/

interface TransporteInterfaz {

    public function getInfo() : string;

}

class Bicicleta implements TransporteInterfaz {

    public function __construct()
    {
    }

    public function getInfo() : string {
        return 'La bicicleta tiene 2 ruedas';
    }
}



$bicicleta = new Bicicleta();
echo $bicicleta->getInfo();



