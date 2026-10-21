<?php
    $producto = 1;
    $base = 4;
    $exponente = 5;
    
    $i = 1;
   do{
        $producto *= $base;
        $i++;
    } while ($i <= $exponente) 
    
    echo "Potencia de $base elevado a $exponente: $producto";
?>