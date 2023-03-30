<?php

class Cliente extends Persona {

    public function mostrar() {
        var_dump($this);
    }
}

class Empleado extends Persona {

    public int $salario;
    public function mostrar() {
        var_dump($this);
    }
}
class Persona {
    public string $rut;
    public string $nombre;
}

function prueba(Persona $obj) {
    var_dump($obj);
}

$per=new Persona();
$cli=new Cliente();
$emp=new Empleado();
prueba($per);
prueba($cli);
prueba($emp);