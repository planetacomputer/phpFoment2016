<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

class Persona {
  protected $nombre;
  protected $edad;

  public final function __construct($nombre, $edad){
    $this->nombre = $nombre;
    $this->edad = $edad;
  }

  public function imprimir(){
    echo $this->nombre." ".$this->edad."<br>";
  }
  
}

final class Empleado extends Persona{
  private $sueldo;

  public function cargarSueldo($sueldo){
    $this->sueldo = $sueldo;
  }

  public function imprimir(){
    echo parent::imprimir()." ".$this->sueldo;
  }

}

$empl = new Persona('Pedro', 54);
//$empl->cargarSueldo();
$empl->imprimir();

$pers=new Empleado('Jose', 2000);
$pers->cargarSueldo(3222);
$pers->imprimir();

?>
</body>
</html> 