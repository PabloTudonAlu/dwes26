<?php 
declare(strict_types=1);
function esPar(int $num) : bool {
    
     return $num%2==0;
}

function arrayAleatorio(int $tam, int $min, int $max) : array {
    $arrayReturn = [];
    for ($i=0; $i < $tam; $i++) { 
        $arrayReturn[$i] = rand($min, $max);
    }
    return $arrayReturn;
}

function arrayPares(array &$array): int {
    $cantidadPares = [];
    for ($i=0; $i < count($array); $i++) { 
        if (esPar($array[$i])) {
            $cantidadPares++;
        }
    }
    return $cantidadPares;
}

$miArray = arrayAleatorio(5, 1, 4);
var_dump($miArray);

echo "Numero de Pares: " . arrayPares($miArray);
?>