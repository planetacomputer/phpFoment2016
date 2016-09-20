<?php
class Empleado{
	private $nombre;
	private $sueldo;

	public function __construct($nombre, $sueldo = 1000){
		$this->nombre = $nombre;
		$this->sueldo = $sueldo;
	}

	public function graficar(){
		echo 'Hola soy '.$this->nombre.' y cobro esto: '.$this->sueldo.'<br>';
	}
}

$empleado1 = new Empleado('Jose');
$empleado1->graficar();

$empleado2 = new Empleado('Pedro', 1200);
$empleado2->graficar();
?>