<?php 
include_once "248usuarios.php";

//comprueba si se han recibido datos del formulario.
if(!empty($_POST["usuario"]) && $_POST["password"]){

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $encontrado = false;

    //recorre el array de usuarios del include.
    for ($i=0; $i < count($usuarios) && !$encontrado; $i++) { 
        if ($usuarios[$i]["usuario"] == $usuario && $usuarios[$i]["password"] == $password) {
            $encontrado = true;
        }
    }

    //redigir la pagina segun el valor de $encontrado
    if ($encontrado) {
        header("Location: ./248ok.php");
    } else {
        header("Location: ./248ko.php");
    }
}
?>