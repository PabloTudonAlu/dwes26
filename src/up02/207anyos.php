<?php 

$edad = $_GET["edad"];
$anyoActual = date("Y");

echo ("La edad hace 10 años era " . $edad - 10 . " en el año " . $anyoActual - 10 . </br>);
echo ("La edad en 10 años sera " . $edad + 10 . " en el año " . $anyoActual + 10  . </br>);
if ((67 - $edad) > 0){
    echo ("Te faltan " . 67 - $edad . " años para jubilarte.");
} else {
    echo ("Ya estas jubilado.");
}
?>