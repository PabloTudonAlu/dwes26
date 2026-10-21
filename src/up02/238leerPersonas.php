<?php 
if (!empty($_POST["cantidad"])){

    echo "<form action='238gestionarPersonas.php' method='post'>";

    for ($i=1; $i <= $_POST["cantidad"]; $i++) { 
        echo "PERSONA $i:</br>";

        echo "<label for='personas[$i][nom]'>Nombre$i:</label>";
        echo "<input type='text' name='personas[$i][nom]'></br>";

        echo "<label for='personas[$i][email]'>Email$i:</label>";
        echo "<input type='email' name='personas[$i][email]'></br>";

        echo "<label for='personas[$i][altura]'>Altura$i:</label>";
        echo "<input type='number' name='personas[$i][altura]'></br></br>";
    }
    echo "<input type='submit' value='enviar a calculo'>";
    echo "</form>";
} else {
    echo "No has introducido ningun numero";
}

/* Codigo sin Array2
if (!empty($_POST["cantidad"])){

    echo "<form action='238gestionarPersonas.php' method='post'>";

    $personas = [];// crea un array indexado para el numero de personas

    for ($i=1; $i <= $_POST["cantidad"]; $i++) { 
        echo "PERSONA$i:</br>";

        echo "<label for='nombre". $i ."'>Nombre$i</label>";
        echo "<input type='text' name='nombre" . $i ."'></br>";

        echo "<label for='email". $i ."'>Email$i</label>";
        echo "<input type='text' name='email". $i ."'></br>";

        echo "<label for='altura". $i ."'>Altura$i</label>";
        echo "<input type='text' name='altura". $i ."'></br></br>";
    }
    echo "<input type='hidden' name='numpersons' value=" . $_POST["cantidad"] . ">";
    echo "<input type='submit' value='enviar a calculo'>";
    echo "</form>";
} else {
    echo "No has introducido ningun numero";
}*/

/* Codigo sin Array
if (!empty($_POST["cantidad"])){
    echo "<form action='238gestionarPersonas.php' method='post'>";
    for ($i=1; $i <= $_POST["cantidad"]; $i++) { 
        echo "PERSONA$i:</br>";

        echo "<label for='nombre". $i ."'>Nombre$i</label>";
        echo "<input type='text' name='nombre" . $i ."'></br>";

        echo "<label for='email". $i ."'>Email$i</label>";
        echo "<input type='text' name='email". $i ."'></br>";

        echo "<label for='altura". $i ."'>Altura$i</label>";
        echo "<input type='text' name='altura". $i ."'></br></br>";
    }
    
    echo "<input type='submit' value='enviar a calculo'";
    echo "</form>";
} else {
    echo "No has introducido ningun numero";
}
*/

?>