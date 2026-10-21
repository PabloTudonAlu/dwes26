<?php 
$frase = "Agatha: ¿Quien si no?";

$frase = strtolower($frase);

for ($i=0; $i < strlen($frase); $i+=2) { 
    if($frase[$i] == " "){
        $i++;
    }
    $frase[$i] = strtoupper($frase[$i]);
}

echo $frase;
?>