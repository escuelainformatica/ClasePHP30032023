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

## OOP

* No necesitamos crear herencias.  Cuando agregamos una herencia, agregamos una dependencia, y eso es malo. Una dependencia, que nos atamos a que el codigo sea mas dificil de cambiarlo.
* Sobre las interfaces, en PHP solo sirve para ordenar el codigo ya que no las necesitamos usar, porque PHP define los tipos de variable dinamicamente.
* Sobre los campos estaticos, se recomienda no usarlo.
* Sobre los metodos estaticos, si los podemos utilizar, salvo cuando requiere trabajar con campos.

## Pruebas del codigo

* Por lo general, lo que vamos a probar son funcionalidades, por lo tanto las pruebas se hacen en las clases de servicio. En realidad lo que probamos son los metodos de la clase de servicio.
* Por lo general, los modelos no los probamos.

Existen las siguientes funciones:
* Las funciones deterministas: segun los mismos parametros, devuelve el mismo valor
* Las funciones no deterministas: segun los mismos parametros, puede devolver un valor diferente.
* Las funciones que requiere recursos externos, ejemplo base de datos (no deterministas)

* Las funciones deterministas: pruebas unitarias.
* Las funciones no deterministas: pruebas unitarias (en la medida que se pueda)
* Las funciones que requiere recursos externos: pruebas de integracion.






