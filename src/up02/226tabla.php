<?php
if (!empty($_POST["filas"]) && !empty($_POST["columnas"])){

    $filas = $_POST["filas"];
    $columnas = $_POST["columnas"];

    echo "<table border 1px>";
    for ($f=1; $f <= $filas; $f++) {
        echo "<tr>";

        for ($c=1; $c <= $columnas; $c++) { 
            echo "<td>"."F".$f."C".$c."</td>";
        }

        echo "</tr>";
    }
    echo "</table>";
}else{
    echo "Son necesarias filas y columnas";
}
?>
