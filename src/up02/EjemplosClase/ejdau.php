<?php
    $intentos = 0;
    do {
        $dado = rand(1, 6);
        // rand() devuelve un valor aleatorio
        echo "Tirando el dado... ";
        echo "ha salido un " . $dado . ".";
        echo "<br>";
        $intentos++;
    } while ($dado != 5);
    echo "El numero de intentos realizados es: $intentos";
?>