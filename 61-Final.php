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
  public final function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
}

final class Suma extends Operacion{
  private $titulo;
  public function __construct($v1,$v2,$tit)
  {
    Operacion::__construct($v1,$v2);
    $this->titulo=$tit;
  }
  public function operar()
  {
    echo $this->titulo;
    echo $this->valor1.'+'.$this->valor2.' es ';
    $this->resultado=$this->valor1+$this->valor2;
  }

}

//Esto da error porque Suma esta definida com final
class SumaTresValores extends Suma {
//...
}

$suma=new Suma(10,10,'Suma de valores:');
$suma->operar();
$suma->imprimirResultado();
?>
</body>
</html>