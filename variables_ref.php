<?php
//variables por referencia
$foo = 'Bob'; // Asigna el valor 'Bob' a $foo
$bar = &$foo; // Referenciar $foo vía $bar.

$bar = "Mi nombre es $bar<br>";  // Modifica $bar...
echo $bar."\n";
//la variable $foo mostrará por consola 'Mi nombre es Bob<br>',
//porque al usar como referencia de $foo la variable $bar, estoy
//pasando la posición del espacio en la memoria de la variable
//$foo, es decir, un puntero
echo $foo;
echo "\nFin"; 

$vocales = array( 1 => "a", 3=> "e","i","o","u");
//$vocales[5] muestra 'o' de resultado por consola porque,
//a través de un puntero, la posición 2 dentro del array
//se está omitiendo. Si no estuviese el segundo puntero,
//$vocales[5] tendría como valor 'u'
var_dump($vocales[5]);