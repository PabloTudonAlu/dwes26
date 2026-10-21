<?php 

    $nums = [];
    $menor = 100;
    $mayor = 0;
    $media = 0;
    echo "[";

    for ($i=0; $i < 33; $i++) { 
        $nums[] = rand(0, 100);
        echo $nums[$i];
        
        if ($nums[$i] < $menor){
            $menor = $nums[$i];
        }

        if ($nums[$i] > $mayor){
            $mayor = $nums[$i];
        }

        $media += $nums[$i];

        if($i < 33-1){
            echo ", ";
        }
    }

    echo "] </br>";

    echo "Menor: $menor </br>";
    echo "Mayor: $mayor </br>";
    echo "Media:" . $media / count($nums) . "</br>";
?>