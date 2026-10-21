<?php 
$frase = "ligar es ser agil";
$palindromo = true;

$frase2 = strtolower($frase);
$frase2 = str_replace(" ", "", $frase2);
$frase2 = str_replace("'", "", $frase2);
$frase2 = str_replace(",", "", $frase2);
$frase2 = str_replace("á", "a", $frase2);
$frase2 = str_replace("à", "a", $frase2);
$frase2 = str_replace("é", "e", $frase2);
$frase2 = str_replace("í", "i", $frase2);
$frase2 = str_replace("ó", "o", $frase2);
$frase2 = str_replace("ò", "o", $frase2);
$frase2 = str_replace("ú", "u", $frase2);

$frase2 = str_replace("ï", "i", $frase2);
$frase2 = str_replace("ü", "u", $frase2);


for ($i=0; $i < strlen($frase2)/2 && $palindromo; $i++) { 
    if($frase2[$i] != $frase2[strlen($frase2)-1-$i]) {
        $palindromo = false;
    }
}

if ($palindromo == true) {
    echo "Es un palidormo";
} else {
    echo "No es un palidormo";
}
?>