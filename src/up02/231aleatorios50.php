<?php 

    $nums = [];
    echo "<ul>";
    for ($i=0; $i < 50; $i++) { 
        $nums[] = rand(0, 99);
        echo "<li>".$nums[$i]. "</li>";
    }
    echo "</ul>";
?>