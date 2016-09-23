<?php
class Futbolista extends SeleccionFutbol{
	public $demarcacion;

	public function __construct($id, $nombre, $apellidos, $edad, $demarcacion){
		parent::__construct($id, $nombre, $apellidos, $edad);
		$this->demarcacion = $demarcacion;
	}

	public function viajar(){
		echo "viajar del futbolista";
	}
	public  function concentrase(){
		echo "concentrarse del futbolista";
	}
	public  function entrenamiento(){
		echo "entrenamiento del futbolista";
	}
	public  function partidoFutbol(){
		echo "partidoFutbol del futbolista";
	}

	//Este no lo hereda de la clase abstracta
	//sino que es propio
	public function entrevista(){
		echo "es una entrevista";
	}
}
?>