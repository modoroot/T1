<?php
/**
 * Ejemplo de uso de un destructor. Sólo puede haber un destructor, igual que 
 * con constructores
 */
class MyDestructableClass{
public function __destruct()
{
    echo "Dentro del destructor\n";
}
/**
 * Los destructores se utilizan para incluir código de seguridad
 * cerrar sockets, conexiones a DB, ficheros, etc. 
 */
public function __construct()
{
    echo "Dentro del constructor\n";
}
    public function saluda( string $nombre){
        echo "Hola ".$nombre."\n";
    }
}
$myDestructable = new MyDestructableClass();
$myDestructable->saluda("Rafa");