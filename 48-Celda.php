<?php
class Celda{
	private $texto;
	private $colorFuente;
	private $colorFondo;

	public function __construct($texto, $colorFuente, $colorFondo){
		$this->texto = $texto;
		$this->colorFuente = $colorFuente;
		$this->colorFondo = $colorFondo;
	}

	public function graficar(){
		echo '<td style="border: 1px solid grey;color: '.$this->colorFuente .';background-color: '.$this->colorFondo.'">'.$this->texto.'</td>';
	}

}
?>