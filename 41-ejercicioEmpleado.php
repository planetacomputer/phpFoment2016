<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class Empleado{
	private $nombre;
	private $sueldo;

	public function inicializar($nombre, $sueldo){
		$this->nombre = $nombre;
		$this->sueldo = $sueldo;
	}

	public function imprimir(){
		echo $this->nombre." - ";
		if($this->sueldo > 3000){
			echo "Pagas impuestos";
		}
		else{
			echo "No pagas impuestos";
		}
		echo "<br>";
	}
}

$pers1 = new Empleado();
//Ana paga impuestos
$pers1->inicializar("Ana", 5000);
$pers1->imprimir();

$pers2 = new Empleado();
//Jose no paga impuestos
$pers2->inicializar("Jose", 1000);
$pers2->imprimir();
?>
<a href="www.google.com" title="Enlace a un buscador cualquiera">Enlace</a>
</body>
</html>