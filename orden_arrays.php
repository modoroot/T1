<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
echo "Array sin ordenar, por valor <br>";
var_dump($fruits);
asort($fruits);
echo "Ordenado, por valor <br>";
var_dump($fruits);

echo "Ordenado por clave <br>";
ksort($fruits);
var_dump($fruits);

echo "Array ordenado por valor sin mantener las claves";
sort($fruits);
var_dump($fruits);
?>