<?php 
function mayor(...$nums): int {
    $mayor = -99999;
    for ($i=0; $i < count($nums); $i++) { 
        if ($nums[$i] > $mayor) {
            $mayor = $nums[$i];
        }
    }
    return $mayor;
}

echo mayor(2,3,6,0,0,-1,30,9);
echo "</br>";
echo mayor (5,8);
?>