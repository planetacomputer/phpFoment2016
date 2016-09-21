<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

abstract class Persona {
  protected $nombre;
  protected $edad;

  public function __construct($nombre, $edad){
    $this->nombre = $nombre;
    $this->edad = $edad;
  }

  public function imprimir(){
    echo $this->nombre." ".$this->edad."<br>";
  }
  
}

class Empleado extends Persona{
  private $sueldo;

  /*public function cargarSueldo($sueldo){
    $this->sueldo = $sueldo;
  }*/

  public function __construct($nombre, $edad, $sueldo){
    parent::__construct($nombre, $edad);
    $this->sueldo = $sueldo;
  }

  public function imprimir(){
    echo parent::imprimir()." ".$this->sueldo;
  }

}



$empl = new Empleado('Pedro', 54, 3000);
//$empl->cargarSueldo();
$empl->imprimir();

$pers=new Persona();
$pers->cargar('Jose', 32);
$pers->imprimir();




?>
</body>
</html> 