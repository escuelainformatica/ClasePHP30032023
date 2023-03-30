<?php

// una interface es un contrato

// es como escribir la clase pero tiene lo siguiente.
// las funciones no son publicos, private o protected
// tampoco tiene campos
// y los metodos no tiene cuerpo de codigo


class Cliente   {
    
    public string $rut;
    public string $nombre;

    public function mostrar() {
        var_dump($this);
    }
}

class Empleado   {
    public string $rut;
    public string $nombre;
    public int $salario;
    public function mostrar() {
        var_dump($this);
    }
}
class Proveedor  {
    public function mostrar() {
        var_dump($this);
    }
}

function prueba($obj) {
    var_dump($obj);
}


$cli=new Cliente();
$emp=new Empleado();
prueba($cli);
prueba($emp);
prueba("aaa");