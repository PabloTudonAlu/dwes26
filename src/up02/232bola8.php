<?php 
    if (!empty($_POST["quest"])) {
        $answers = [
            "Si", "no", "quizás", "claro que sí", "por supuesto que no", "no lo tengo claro", "seguro", "yo diría que sí", "ni de coña"
        ];
        echo $answers[rand(0,count($answers))-1 ];
    } else {
        echo "Has de realitzar alguna pregunta.";
    }
?>