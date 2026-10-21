<?php
include "247header.php";

// URL: http://localhost:8084/up02/246preparaTiquetCompra.php?productos[0][nombre]=pan&productos[0][precio]=0.78&productos[1][nombre]=leche&productos[1][precio]=0.97&productos[2][nombre]=galletas&productos[2][precio]=1.25
$productos = $_GET["productos"];

echo "<ul>";
foreach ($productos as $producto) {
    echo "<li>Nombre: ". $producto["nombre"] ."Precio: ". $producto["precio"] ."</li>";
}

echo "</ul>";
echo "</br>";

include "247footer.php";
?>