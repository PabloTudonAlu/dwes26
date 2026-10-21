<?php

class Empleado{
    //Constructor
    public function __construct(private string $nombre, private string $apellidos, private float $sueldo, private array $numTelefonos){}

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

    public function getNumTelefonos() : array {
        return $this->numTelefonos;
    }

    public function getNombreCompleto() : string {
        return strtoupper($this->apellidos . "," . $this->nombre . " | Telefonos: " . $this->listarTelefonos() . "</br>");
    }

    public function debePagarImpuestos() : bool {
        return $this->getSueldo() > 3333;
    }

    public function anyadirTelefono(int $telefono) : void {
        $this->numTelefonos[] = $telefono;
        //que añada un telefono a la posicion que sea igual a la cantidad de telefono, porque al empezar por 0, la cantidad sera mayor que la posicion.
    }

    public function listarTelefonos() : string {
        $listado = "";
        foreach ($this->numTelefonos as $telefono ) {
            $listado .= $telefono . ", ";
        }  
        return substr($listado, 0, strlen($listado)-2);
    }

    public function vaciarTelefono(): void {
        $this-> numTelefonos = [];
    }
}

$pablo = new Empleado("Pablo", "Tudón Lloret", 2500, [12345678]);

$pablo-> anyadirTelefono(999666333);
$pablo-> anyadirTelefono(11162548);

echo $pablo-> getNombreCompleto();

echo $pablo-> vaciarTelefono();

echo $pablo->getNombreCompleto();

echo ($pablo->debePagarImpuestos()?"Si":"No") . " debe pagar impuestos.";
?>