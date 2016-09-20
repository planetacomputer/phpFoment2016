<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

class Persona {
  protected $nombre;
  protected $edad;

  public function cargar($nombre, $edad){
    $this->nombre = $nombre;
    $this->edad = $edad;
  }

  public function imprimir(){
    echo $this->nombre." ".$this->edad."<br>";
  }
  
}

class Empleado extends Persona{
  private $sueldo;

  public function cargarSueldo($sueldo){
    $this->sueldo = $sueldo;
  }

  public function imprimir(){
    echo parent::imprimir()." ".$this->sueldo;
  }

}

$pers=new Persona();
$pers->cargar('Jose', 32);
$pers->imprimir();

$empl = new Empleado();
$empl->cargar('Pedro', 54);
$empl->cargarSueldo(3000);
$empl->imprimir();




?>
</body>
</html> 