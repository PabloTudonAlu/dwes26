<?php 

$a = 4;
$b = 12;
$c = 8;

if (a > b) {
    if (a > c) {
        echo "el mayor es " . $a;
    } else {
        echo "el mayor es " . $c;
    }
} else if (b > c){
    echo "el mayor es " . $b;
} else {
    echo "el mayor es " . $c;
}

?>