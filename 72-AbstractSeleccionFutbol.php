<?php
require_once '72-AbstractSeleccionFutbol.php';
abstract class SeleccionFutbol  {
	protected $id;
	protected $nombre;
	protected $apellidos;
	protected $edad;

	public function __construct($id, $nombre, $apellidos, $edad){
		$this->id = $id;
		$this->nombre = $nombre;
		$this->apellidos = $apellidos;
		$this->edad = $edad;
	}

	public function getId(){
		return $this->id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getApellidos(){
		return $this->apellidos;
	}

	public function getEdad(){
		return $this->edad;
	}

	public abstract function viajar();
	public abstract function concentrase();
	public abstract function entrenamiento();
	public abstract function partidoFutbol();


}
?>