<?php
require_once '72-AbstractSeleccionFutbol.php';
class Entrenador extends SeleccionFutbol{
	protected $idFederacion;

	public function __construct($id, $nombre, $apellidos, $edad, $idFederacion){
		parent::__construct($id, $nombre, $apellidos, $edad);
		$this->idFederacion = $idFederacion;
	}
	public function viajar(){
		echo "viajar del entrenador";
	}
	public  function concentrase(){
		echo "concentrarse del entrenador";
	}
	public  function entrenamiento(){
		echo "entrenamiento del entrenador";
	}
	public  function partidoFutbol(){
		echo "partidoFutbol del entrenador";
	}

	public function getIdFederacion(){
		return $this->idFederacion;
	}
}
?>