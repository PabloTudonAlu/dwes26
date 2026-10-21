<?php

$frase = "VisionQuest";

$impar = "";

for ($i=1; $i < strlen($frase); $i += 2) { 
    $impar .= $frase[$i];
}

echo $impar;
?>