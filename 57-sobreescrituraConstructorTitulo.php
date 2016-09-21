<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
abstract class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;

  public function __construct($v1,$v2) 
  {
    $this->valor1=$v1;
    $this->valor2=$v2;
    echo "soy el padre";
  }

  public function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
}

class Suma extends Operacion{
  private $titulo;

  public function __construct($v1, $v2, $titulo){
    parent::__construct($v1, $v2);
    $this->titulo = $titulo;
  }
  public function operar()
  {
    $this->resultado=$this->valor1+$this->valor2;
  }
  public function imprimirResultado(){
    echo $this->titulo.": ";
    echo parent::imprimirResultado();
  }
}

$suma=new Suma(10, 10, "Titulo");
$suma->operar();
$suma->imprimirResultado();

$operacion = new Operacion(19, 18);
?>
</body>
</html>