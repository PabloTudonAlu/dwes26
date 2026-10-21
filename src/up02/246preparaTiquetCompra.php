<?php

// URL: http://localhost:8084/up02/246preparaTiquetCompra.php?productos[0][nombre]=pan&productos[0][precio]=0.78&productos[1][nombre]=leche&productos[1][precio]=0.97&productos[2][nombre]=galletas&productos[2][precio]=1.25

$productos = $_GET["productos"];

/* var_dump($productos); */
$suma = 0;
foreach ($productos as $producto){
    echo "Nombre: ". $producto["nombre"] ."</br>";
    echo "Precio: ". $producto["precio"] ."</br>";

    $suma += (int) $producto["precio"];   
}
echo "Precio Total: ". $suma ."</br>";
echo "</br>";

echo "<table border 1px>";
$sumaEuros = 0;
$sumaPesetas = 0;
foreach ($productos as $producto) {
    echo "<tr>";
    echo "<td>Nombre: ". $producto["nombre"] ."</td>";
    echo "<td>Precio en Euros: ". $producto["precio"] ."</td>";
    echo "<td>Precio en Pesetas: ". $producto["precio"] * 166.386 ."</td>";
    echo "</tr>";

    $sumaEuros += (int) $producto["precio"];
    $sumaPesetas += (int) ($producto["precio"] * 166.386);
}
echo "<tr>";
    echo "<td> </td>";
    echo "<td>Precio Total en Euros: ". $sumaEuros ."</td>";
    echo "<td>Precio Total en Pesetas: ". $sumaPesetas ."</td>";
echo "</tr>";
echo "</table>";
?>