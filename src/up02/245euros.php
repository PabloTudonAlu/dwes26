<?php 
function peseta2euros(int $pesetas, int $cotizacion): float{
    $resultado = $pesetas / 166.386 ;
    (int)(($resultado * 100)/ 100);
}

function euros2pesetas(int $euros, int $cotizacion): float{
    $resultado = $euros * 166.386 ;
}
?>