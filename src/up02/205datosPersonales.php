<?php 

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$año = $_POST["año"];
$telefono = $_POST["telefono"];

echo "<table border=1>";
echo "<tr>";
echo "<td>Nombre:</td>";
echo "<td>$nombre</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Apellidos:</td>";
echo "<td>$apellidos</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Email:</td>";
echo "<td>$email</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Año de Nacimiento:</td>";
echo "<td>$año</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Telefono:</td>";
echo "<td>$telefono</td>";
echo "</tr>";
echo "</table>";
?>