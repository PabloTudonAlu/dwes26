<?php 

function precipitaciones($prec){
    $suma = 0;
    foreach ($prec as $dia) {
        $suma += $dia;
    }

    echo "Total: $suma</br>";
    printf "Media: %.2f</br></br>",$suma/count($prec);
}

$lluvias = [];

echo "[";
for ($i=0; $i < 31; $i++) { 
   $lluvias[$i] = rand(0,50);
   echo $lluvias[$i].", ";
}
echo "]</br>";
precipitaciones($lluvia);
?>