<?php 

$numero = $_GET["numero"];

if ($numero > 0) {
    echo "positivo";
} else if ($numero < 0) {
    echo "negativo";
} else {
    echo "cero";
}

?>