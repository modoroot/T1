<?php
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}
var_dump($array);
?>