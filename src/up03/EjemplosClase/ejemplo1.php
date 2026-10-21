<?php
  class Producto {
    const IVA = 0.23;
    private static $numProductos = 0; 
     
    public function __construct(private string $codigo, private float $precio) {
        self::$numProductos++;
    }

    public function mostrarResumen() : string {
        return "El producto ".$this->codigo." es el número ".self::$numProductos." y su precio es: ".$this->precio * (1 + self::IVA);
    }
}

$prod1 = new Producto("PS5", 100);
$prod2 = new Producto("XBOX Series X", 150);
$prod3 = new Producto("Nintendo Switch", 155.78);
echo $prod1->mostrarResumen();
echo "<br>";
echo $prod2->mostrarResumen();