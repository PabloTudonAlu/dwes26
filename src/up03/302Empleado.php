<?php

class Empleado{
    //Constructor
    public function __construct(private string $nombre, private string $apellidos, private float $sueldo=1200){}

    //Setters
    public function setNombre(string $nom){
        $this->nombre = $nom;
    }

    public function setApellidos(string $aps){
        $this->apellidos = $aps;
    }

    public function setSueldo(string $sue){
        $this->nombre = $sue;
    }

    //Getters
    public function getNombre() : string {
        return $this->nombre;
    }

    public function getApellidos() : string {
        return $this->apellidos;
    }

    public function getSueldo() : float {
        return $this->sueldo;
    }

    public function getNombreCompleto() : string {
        return strtoupper($this->apellidos . "," . $this->nombre);
    }

    public function debePagarImpuestos() : bool {
        return $this->getSueldo() > 3333;
    }
}

$pablo = new Empleado("Pablo", "Tudón Lloret", 2500);

echo $pablo->getNombreCompleto();
echo ($pablo->debePagarImpuestos()?"Si":"No") . " debe pagar impuestos.";

?>