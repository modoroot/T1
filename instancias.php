
<?php
class Prueba
{
    static public function getNew()
    {
        return new static;
    }
}

class Hija extends Prueba
{}

//se crea una instancia de la clase Prueba
$obj1 = new Prueba();
//Se crea una instancia a partir de un objeto de la clase prueba
$obj2 = new $obj1;
//Se verifica si los objetos anteriores son idénticos
var_dump($obj1 !== $obj2);
//se utiliza un metodo estatico de la clase
//para construir una nueva instancia de la misma
$obj3 = Prueba::getNew();
//comprueba si la variable contiene una instancia de la clase Prueba
var_dump($obj3 instanceof Prueba);
//se construye una instancia de la clase Prueba a partir de una clase derivada
$obj4 = Hija::getNew();
//se comprueba si la instancia creada es del tipo derivada
var_dump($obj4 instanceof Hija);
?>
