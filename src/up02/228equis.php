<?php
    $filas = $_POST["filas"];
    $columnas = $_POST["columnas"];
    
    echo "<table border 1px>";
    
    for ($f=1; $f <= $filas; $f++) {
        echo "<tr>";

        for ($c=1; $c <= $columnas; $c++) { 
        
            if ($c == $f || $c + $f == $columnas + 1){
                echo "<td>"."F".$f."C".$c."</td>";
            }else{
                echo "<td> </td>";
            }
            
        }

        echo "</tr>";
    }
    echo "</table>";
?>