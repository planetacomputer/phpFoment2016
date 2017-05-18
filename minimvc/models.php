<?php
class ModeloUno {
	var $propiedad;
	function a($parametro) {
		$this->propiedad = $parametro;
	}
}

class ModeloDos {
	var $propiedad_1;
	var $propiedad_2;
	var $propiedad_3;
	function b($param1, $param2) {
		$this->propiedad_1 = $param1;
		$this->propiedad_2 = $param2;
		$this->propiedad_3 = $param1 + $param2;
	}
}
?>