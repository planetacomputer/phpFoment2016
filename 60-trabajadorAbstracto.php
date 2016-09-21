<?php
abstract class Trabajador{
	protected $nombre;
	protected $sueldo;

	public function __construct($nombre){
		$this->nombre = $nombre;
	}

	public function imprimir(){
		echo $this->nombre." ".$this->sueldo;
	}

	protected abstract function calcularSueldo();
}

class Empleado extends Trabajador{
	protected $horasTrabajadas;
	protected $valorHora;

	public function __construct($nombre, $horasTrabajadas, $valorHora){
		$this->horasTrabajadas = $horasTrabajadas;
		$this->valorHora = $valorHora;
		parent::__construct($nombre);
	}

	public function calcularSueldo(){
		return $this->horasTrabajadas*$this->valorHora;
	}
}

class Gerente extends Empleado{
	protected $ganancias;
	public function __construct($nombre,$ganancias){
		parent::__construct($nombre);
		$this->ganancias=$ganancias;
	}
	public function calcularSueldo(){
		return $this->sueldo=$this->ganancias*0.10;
	}
}

$empl = new Empleado("Pedro", 160, 3.5);
echo $empl->calcularSueldo()."<br>";

$gerente = new Gerente("Juan Gerente", 20001);
echo $gerente->calcularSueldo();

?>