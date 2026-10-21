<?php 

$personas = $_POST["personas"];
$menor=300;
$mayor=0;

echo "<table border=1>";

foreach ($personas as $persona){
    echo "<tr>";
    echo "<td> $persona["nom"] </td>";
    echo "<td> $persona["email"] </td>";
    echo "<td> $persona["altura"] </td>";
    echo "</tr>";
    if ($persona["altura"] < $menor) {
        $menor = $persona["altura"];
    }
    if ($persona["altura"] > $mayor) {
        $mayor = $persona["altura"];
    }
}

echo "</table>";

echo "Menor: $menor </br>";
echo "Mayor: $mayor </br>";

/* Solucion sin Arrays
$mayor=0;
$menor=300;
echo "<table border=1>";
for ($i=0; $i < $_POST["numpersons"]; $i++) { 
    echo "<tr>";
    echo "<td>" .$_POST['nombre$i']. "</td>";
    echo "<td>" .$_POST['email$i']. "</td>";
    echo "<td>" .$_POST['altura$i']. "</td>";
    echo "</tr>";
    if ($_POST["altura$i"] > $menor) {
        $menor = $_POST["altura$i"];
    }
    if ($_POST["altura$i"] > $mayor) {
        $mayor = $_POST["altura$i"];
    }
}
echo "</table>";

echo "Menor: $menor </br>";
echo "Mayor: $mayor </br>";
*/

?>