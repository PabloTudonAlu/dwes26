<?php

class Empleado{
    private static float $sueldoTope = 3000;

    //Constructor
    public function __construct(private string $nombre, 
                                private string $apellidos, 
                                private float $sueldo, 
                                private array $numTelefonos=[]){}

    //Setters
    public function setSueldo(string $sue){
        $this->sueldo = $sue;
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
        return strtoupper($this->apellidos . "," . $this->nombre . "</br>". "Sueldo:" . $this->sueldo . "</br>" . " | Telefonos: " . $this->listarTelefonos() . "</br>");
    }

    public function debePagarImpuestos() : bool {
        return $this->getSueldo() > self::$sueldoTope;
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

    public static function setSueldoTope(string $sueldo): void {
        self::$sueldoTope = $sueldo;
    }

    public static function getSueldoTope(): float {
        return $self::sueldoTope;
    }

    public static function toHtml(Empleado $emp): string {
        $result = "Empleado: </br>";
        $result .= "Nombre: " . $emp->getNombre() . "</br>";
        $result .= "Apellidos: " . $emp->getApellidos() . "</br>";
        $result .= "Sueldo: " . $emp->getSueldo() . "</br>";
        $result .= "Telefonos:<ul>";

        foreach ($emp->getNumTelefonos() as $telefono) {
            $result .= "<li>" . $telefono. "</li>";
        }

        $result .= "</ul></p>";

        return $result;
    }
}

$adrian = new Empleado("Adrian", "Requena Garces", 1000, [11111111, 23454312, 47839102]);
$adrian->setSueldo(4000);
$adrian->setSueldoTope(3000);

echo ($adrian->debePagarImpuestos()?"Si":"No") . " debe pagar impuestos.";

echo  Empleado::toHtml($adrian);
?>