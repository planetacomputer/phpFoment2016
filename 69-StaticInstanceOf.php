<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
abstract class Trabajador {
  protected $nombre;
  protected $sueldo;
  public function __construct($nom,$sue)
  {
    $this->nombre=$nom;
    $this->sueldo=$sue;
  }
  public function retornarSueldo()
  {
    return $this->sueldo;
  }
} 

class Empleado extends Trabajador {
  static $numEmpl;
  public function __construct($nom,$sue){
    parent::__construct();
    self::$numEmpl+=1;
  }
}

class Gerente extends Trabajador {
  static $numGere;
  public function __construct($nom,$sue){
     parent::__construct();
     self::$numGere+=1;
  }
}

$vec[]=new Empleado('juan',1200);
$vec[]=new Empleado('ana',1000);
$vec[]=new Empleado('carlos',1000);

$vec[]=new Gerente('jorge',25000);
$vec[]=new Gerente('marcos',8000);
$suma1=0;
$suma2=0;
for($f=0;$f<count($vec);$f++)
{
  if ($vec[$f] instanceof Empleado)
    $suma1=$suma1+$vec[$f]->retornarSueldo();
  else
    if ($vec[$f] instanceof Gerente)
      $suma2=$suma2+$vec[$f]->retornarSueldo();
}
echo 'Gastos en sueldos de '.Empleado::$numEmpl.' Empleados:<br>';
echo 'Gastos en sueldos de  '.Gerente::$numGere.' Gerentes:<br>';
?>
</body>
</html> 