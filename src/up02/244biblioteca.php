<?php 

function sumar (int ...$nums) : int {
    $suma = 0;
    foreach($nums as $num){
        $suma += $num;
    }
    return $suma;
}

function restar (int ...$nums) : int {
    $resta = 0;
    foreach($nums as $num){
        $resta -= $num;
    }
    return $resta;
}

function multiplicar (int ...$nums) : int {
    $multi = 0;
    foreach($nums as $num){
        $multi *= $num;
    }
    return $multi;
}

function dividir (int ...$nums) : int {
    $div = 0;
    foreach($nums as $num){
        $div /= $num;
    }
    return $div;
}
?>