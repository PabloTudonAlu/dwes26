<?php 

$dia = $_GET["dia"];
$mes = $_GET["mes"];
$anyo = $_GET["anyo"];
$diaMes = 0;

switch ($mes) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $diaMes = 31;
        break;
    case 2:
        $diaMes = 28;
        break;
    default:
       $diaMes = 30;
        break;
}

if ($dia == $diaMes){
    $dia = 1;
    $mes++;
} else {
    $dia++;
}

if ($mes > 12) {
    $mes = 1;
    $anyo++;
}

echo "dia $dia del mes $mes de $anyo";

?>