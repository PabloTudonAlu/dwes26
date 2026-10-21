<?php 

function digitos(int $num): int{
    $numdigitos = 0;
    while ($num > 0) {
        $num = (int)($num / 10);
        $numdigitos++;
    }
    return $numdigitos;
}

function digitoN(int $num, int $pos): int{
    $numdigitos = digitos(num);
    if(pos > $numdigitos){
        return -1;
    }else{
        for ($i = 0; $i < $numdigitos - $pos; $i++) { 
            $num = (int)($num / 10);
        }
        return $num % 10;
    }
}

function quitaPorDetras(int $num, int $cant): int{
    $numdigitos = digitos(num);
    if($cant >= $numdigitos){
        return -1;
    } else {
        return (int)($num / (10 ** $cant));
    }
}

function quitaPorDelante(int $num, int $cant): int{
    $numdigitos = digitos(num);
    if($cant >= $numdigitos){
        return -1;
    } else {
        $pot = $numdigitos - $cant;
        return $num % (10 ** $pot);
    }
}

?>