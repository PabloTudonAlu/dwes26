<?php 

$segundos = $_GET["segundos"];
$minutos = $_GET["minutos"];
$horas = $_GET["horas"];
$ok = true;

if ($segundos < 0 && $segundos > 59) {
    echo "Los segundos estan fuera del rango permitido(0-59)"
    $ok = false;
}

if ($minutos < 0 && $minutos > 59) {
    echo "Los minutos estan fuera del rango permitido(0-59)"
    $ok = false;
}

if ($horas < 0 && $horas > 23) {
    echo "Las horas estan fuera del rango permitido(0-59)"
    $ok = false;
}

if ($ok){
    if ($segundos == 59){
        $segundos = 0;
        $minutos++;
    } else{
        $segundos++
    }

    if ($minutos == 59){
        $minutos = 0;
        $horas++;
    }

    if ($horas == 23){
        $horas = 0;
    }
}


echo $horas . ":" . $minutos . ":" . $segundos;
?>