<?php 
    $edad = $_GET["edad"];

    if ($edad >= 0 && $edad < 3){
        echo "bebe";
    } else if ($edad >= 3 && $edad <= 12){
        echo "niño";
    } else if ($edad >= 13 && $edad <= 17){
        echo "adolescente";
    } else if ($edad >= 18 && $edad <= 66){
        echo "adulto";
    } else if ($edad >= 67){
        echo "jubilado";
    } else {
        echo "edad no valida";
    }
?>