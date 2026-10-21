<?php

$alumno = $_POST["alumno"];
$nota = $_POST["nota"];

// var_dump($nota);

if(!empty($_POST['alumno']) && !empty($_POST['nota'])){

    if (($nota>=0) && ($nota<5)){
        $notaExp = "Insuficiente";
        echo "La nota del alumno $alumno es $nota ($notaExp)";
    } else if (($nota>=5) && ($nota<6)){
        $notaExp = "Suficiente";
        echo "La nota del alumno $alumno es $nota ($notaExp)";
    } else if (($nota>=6) && ($nota<7)){
        $notaExp = "Bien";
        echo "La nota del alumno $alumno es $nota ($notaExp)";
    } else if (($nota>=7) && ($nota<9)){
        $notaExp = "Notable";
        echo "La nota del alumno $alumno es $nota ($notaExp)";
    } else if (($nota>=9) && ($nota<=10)){
        $notaExp = "Excelente";
        echo "La nota del alumno $alumno es $nota ($notaExp)";
    } else {
        echo "La nota debe ser un numero entre 0 y 10";
    }

}

?>