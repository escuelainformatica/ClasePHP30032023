<?php

// una interface es un contrato

// es como escribir la clase pero tiene lo siguiente.
// las funciones no son publicos, private o protected
// tampoco tiene campos
// y los metodos no tiene cuerpo de codigo
interface IPersona {
    function mostrar();
}
interface IBaseDeDatos {
    function mostrar();
    function insertar();
    function listar();
    function modificar();
}

class Cliente implements IPersona,IBaseDeDatos  {
    
    public string $rut;
    public string $nombre;

    public function mostrar() {
        var_dump($this);
    }
    function insertar() {

    }
    function listar() {

    }
    function modificar() {

    }
}

class Empleado implements IPersona,IBaseDeDatos  {
    public string $rut;
    public string $nombre;
    public int $salario;
    public function mostrar() {
        var_dump($this);
    }
    function insertar() {

    }
    function listar() {

    }
    function modificar() {
        
    }
}
class Proveedor implements IPersona,IBaseDeDatos {
    public function mostrar() {
        var_dump($this);
    }
    function insertar() {

    }
    function listar() {

    }
    function modificar() {
        
    }
}

function prueba(IPersona $obj) {
    var_dump($obj);
}


$cli=new Cliente();
$emp=new Empleado();
prueba($cli);
prueba($emp);