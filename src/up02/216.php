<?php 
/*La expresion match permite comparar un valor con varias alternativas, esto permite tener varias opciones
y dependiendo del valor elegido, saldra un resultado diferente.*/

    $valor = "b";

    $resultado = match ($valor){
        "a" => "El valor es a"
        "b" => "El valor es b"
        "c" => "El valor es c"
    };
    echo $resultado;
?>