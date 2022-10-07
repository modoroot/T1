<?php
//unión de arrays con el operador +
$a = array("r" => "perro", "t" => "gato");
echo "\$a<br>";
var_dump($a);
$b = array("x" => "pato", "y" => "liebre", "z" => "conejo");
echo "<br>\$b<br>";
var_dump($b);
// Unión de $a y $b
$c = $a + $b;
echo "<br>Unión de \$a y \$b:<br>";
var_dump($c);
echo "<br>";
?>