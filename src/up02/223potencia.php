<?php
    $producto = 1;
    $base = 4;
    $exponente = 5;

    for($i = 1; $i <= $exponente; $i++){
        $producto *= $base;
    }
    echo "Potencia de $base elevado a $exponente: $producto";
?>