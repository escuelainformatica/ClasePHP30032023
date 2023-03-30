<?php

/**
 * Summary of Modelo
 */
class Modelo {
    public int $campo1;
    public string $campo2;


    public function __set($campo,$valor) {
        echo "llamando a set";
    }
}

$obj=new Modelo();
$obj->campo3="ffff"; // trabajar con campo dinamico (PHP 8.2 no es compatible)

class Modelo2 {
    public function __set($campo,$valor) {
        echo "llamando a set";
    }
    public function __get($campo) {

    }
}
$obj=new Modelo2();
$obj->campo="hola";
$obj->dododod="aaa";
var_dump($obj->campo);