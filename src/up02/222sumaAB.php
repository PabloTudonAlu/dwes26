<?php
    $ini = $_GET["ini"];
    $fin = $_GET["fin"];
    
    $suma = 0;

    for($i=$ini; $i<=$fin; $i++){
        $suma += $i;
    }
    echo "suma: $suma";
?>