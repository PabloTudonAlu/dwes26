<?php 
$frase = "Agatha: ¿Quien si no?";

$frase = str_replace(".", "", $frase);
$frase = str_replace(",", "", $frase);

$palabras = explode(" ", $frase);

echo strlen($frase) . "</br>";
echo count($palabras) . "</br></br>";

echo "<ul>";
foreach ($palabras as $palabra) {
    echo "<li>" . $palabra . " (" . strlen($palabra) .")</li>";
}
echo "</ul>";
?>