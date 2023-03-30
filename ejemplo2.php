<?php

class Cliente {
    protected array $campos=[];
    public function __set($campo,$valor) {        
        $this->campos[$campo]=$valor;
    }
    public function __get($campo) {
        return $this->campos[$campo];
    }
}

$cli=new Cliente();
$cli->rut="21222-2";
$cli->nombre="john doe";
$cli->edad="22";

class ClienteServicio {
    public function mostrar(Cliente $cli) {
        var_dump($cli);
    }
}

class ClienteServicioEstatica {
    public static function mostrar(Cliente $cli) {
        var_dump($cli);
    }
}


$servicio=new ClienteServicio();  // clase de servicio sea un Singleton.
$servicio->mostrar($cli);

function ejemplo() {
    $cli=new Cliente();
    $cli->rut="4444-5";
    $cli->nombre="anna smith";
    $cli->edad="22";
}

function ejemplo2(ClienteServicio $servicio) {
    $cli=new Cliente();
    $cli->rut="4444-5";
    $cli->nombre="anna smith";
    $cli->edad="22";
    $servicio->mostrar($cli);
}

function ejemplo3() {
    $cli=new Cliente();
    $cli->rut="4444-5";
    $cli->nombre="anna smith";
    $cli->edad="22";
    ClienteServicioEstatica::mostrar($cli);    
}

// OOP (JAVA)
// las leyes: lo estatico es malo.
