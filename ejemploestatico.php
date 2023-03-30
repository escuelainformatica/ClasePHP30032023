<?php
// tengo una clase que quiero campos y no quiero que sea singleton (o sea solo uno por proyecto), entonces no puede ser estatico.
class ClienteEstatico {
    public static string $rut;
    public static string $nombre;
}
/*
$cli=new ClienteEstatico();
$cli->rut="111-1";
$cli->nombre="john";
*/
ClienteEstatico::$rut="111-1";
ClienteEstatico::$nombre="john";

// cuando tengo solo funciones, es recomendado hacerlo estatico.
class ClienteServicioEstatico {
    public static function mostrar() {        
    }
}
ClienteServicioEstatico::mostrar();

// cuando tengo una funcion estatica, solo puede ocupar campos estaticos.
class EjemploClase {
    public static string $valor;
    public static function guardarValor($valor) {
        self::$valor=$valor;
    }
}

EjemploClase::guardarValor(200);
EjemploClase::guardarValor(400);




