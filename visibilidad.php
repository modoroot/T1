<?php

/**
 * public: acceso desde cualquier lugar
 * private: sólo desde la propia clase
 * protected: se accede usando la herencia (herederas y padre-madre)
 */
class Visibilidad
{
    private string $privada;
    public string $publica;
    protected string $protegida;
}
/**
 * Desde esta clase derivada se intenta modificar las propiedades públicas
 * y protegidas
 */
class HeredaVisibilidad extends Visibilidad
{
    public function __construct()
    {
        $this->publica = "valor asignado desde la clase derivada";
        $this->protegida = "valor asignado desde la clase derivada";
    }
}
//se modifica el valor ed una propiedad pública y de una propiedad protegida
//de la clase derivada
$visibilidad = new Visibilidad();
$visibilidad->publica  = "Valor asignado desde un objeto de la propia clase";
echo $visibilidad->publica ."<br>";
$visibilidad->nombre = "tu nombre te lo ha dado tu padre o madre";
echo $visibilidad->nombre ."<br>";
//acceder a una propiedad protegida de la propia clase base,
//no puede porque tiene que ser dentro de la clase derivada
$heredaVisibilidad = new HeredaVisibilidad();
$heredaVisibilidad->protegida = "El valor te lo ha asignado tu hijo-hija";
echo $heredaVisibilidad->protegida ."<br>";
//intento de acceder a una prop privada de la propia clase
$visibilidad->privada = "Intento de asignar valor a una prop privada";
