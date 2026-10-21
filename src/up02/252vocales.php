<?php

$frase = "WandaVision";
$frase = strtolower($frase); //strtolower convierte la frase a minuscula.
$frase = str_replace("á", "a", $frase);
$frase = str_replace("à", "a", $frase);
$frase = str_replace("é", "e", $frase);
$frase = str_replace("í", "i", $frase);
$frase = str_replace("ó", "o", $frase);
$frase = str_replace("ò", "o", $frase);
$frase = str_replace("ú", "u", $frase);

$frase = str_replace("ï", "i", $frase);
$frase = str_replace("ü", "u", $frase);

$totalVocales = 0;

$vocales = [
    "a" => 0,
    "e" => 0,
    "i" => 0,
    "o" => 0,
    "u" => 0
];

for ($i=0; $i < strlen($frase); $i++) { 
    $letra = $frase[$i];
    if(isset($vocales[$letra])){
        $totalVocales ++;
        $vocales[$letra]++;
    }
}

echo $totalVocales;
echo "</br>";
?>