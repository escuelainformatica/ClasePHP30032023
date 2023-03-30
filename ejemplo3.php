<?php

// OOP PHP, podemos ocupar metodo estaticos, y en algunos casos podriamos ocupar los campos estaticos.
// Unit test, PHPUnit



class Servicio1 {
    // pruebas unitarias
    // funciones deterministas.
    public static function sumar(int $n1,int $n2) {
        return $n1+$n2;
    }
    // pruebas unitarias
    // funcion no deterministica
    public static function azar() {
        return random_int(1,10);
    }
    // funciones no deterministica
    // probar una funcion que tiene relacion con un factor externo.
    // prueba de integracion.
    public static function leerBaseDedatos() {
    }
    
    public static function dividir(int $n1,int $n2) {
        return $n1/$n2;
    }
}

var_dump(Servicio1::sumar(2,3));
var_dump(Servicio1::sumar(2,3));
var_dump(Servicio1::dividir(20,2));

var_dump(Servicio1::dividir(2,0));

