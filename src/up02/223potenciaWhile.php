<?php
    $producto = 1;
    $base = 4;
    $exponente = 5;
    
    $i = 1;
    while ($i <= $exponente) {
        $producto *= $base;
        $i++;
    }
    echo "Potencia de $base elevado a $exponente: $producto";
?>