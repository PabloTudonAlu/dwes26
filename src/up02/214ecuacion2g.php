<?php 

    $a = 5;
    $b = 10;
    $c = 2;

    $discriminante = $b**2 - 4 * $a * $c;
    if ($discriminante > 0) {
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
        echo "Tiene 2 soluciones: $x1 y $x2";
    } else if ($discriminante == 0){
        $x = -$b  / (2 * $a);
        echo "La solucion es: $x";
    } else {
        echo "No tiene solucion";
    }
?>