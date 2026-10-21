<?php
    $ini = $_GET["ini"];
    $fin = $_GET["fin"];

    echo "<ul>";
    for ($i = $ini; $i <= $fin; $i++){
        if ($i % 2 == 0){ //comprueba si $i es par
            echo "<li>$i</li>";
        }
    }
    echo"</ul>";
?>