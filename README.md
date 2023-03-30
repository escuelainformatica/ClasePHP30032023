# static vs no estatico

* Se prefiere que los metodos sean estatico
* Se prefiere que los campos no sean estaticos.
* Si un metodo estatico y quiero ocupar un campo, el campo tiene que ser estatico.
  * Si sucede este caso, el metodo no deberia ser estatico.

## metodos estaticos

```php
class Ejemplo {

    public static function metodo() { }
}
Ejemplo::metodo();
```

## campos estaticos

```php
class Ejemplo {
   public static $campo; // este campo es singleton, es decir es unico para el proyecto
}

Ejemplo::$campo="hola"; 
```

Ejemplo:
```php
class Parametros {
   public static $usuarioActual; 
   public static $color;
   public static $lenguaje;
}

Parametros::$usuarioActual="john";
Parametros::$color="rojo";
Parametros::$lenguaje="es_es";

function ejemplo() {
    var_dump(Parametros::$usuarioActual);
}

```
