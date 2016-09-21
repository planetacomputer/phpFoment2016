<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;
  public function __construct($v1,$v2) 
  {
    $this->valor1=$v1;
    $this->valor2=$v2;
  }
  public function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
}

class Suma extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1+$this->valor2;
  }
}

$suma=new Suma(10,10);
$suma->operar();
$suma->imprimirResultado();
?>
</body>
</html>