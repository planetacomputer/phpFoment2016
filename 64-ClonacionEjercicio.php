<?php
	class Cuadrado{
		private $lado;
		public function __construct($lado){
			$this->lado = $lado;
		}

		public function getLado(){
			return $this->lado;
		}

		public function setLado($lado){
			$this->lado = $lado;
		}

		public function getPerimetro(){
			return 4*$this->lado;
		}

		public function getSuperficie(){
			return $this->lado*$this->lado;
		}
	}

	$cuadrado1 = new Cuadrado(3);
	$cuadrado2 = $cuadrado1;

	echo $cuadrado2->getSuperficie()."<br>";

	//Modifico $cuadrado1;
	$cuadrado1->setLado(4);

	//Y resulta que también modifica $cuadrado2
	echo $cuadrado2->getPerimetro()."<br>";

	//Pasamos a la clonacion
	$cuadrado3 = clone($cuadrado1);
	//Modificamos $cuadrado1
	$cuadrado1->setLado(5);
	//Pero ahora $cuadrado3 no se ve afectado por la modificacion porque al ser clonado es copia
	echo $cuadrado3->getPerimetro(); 

?>