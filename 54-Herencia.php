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
  public function cargar1()
  {
    $this->valor1=$_GET["valor1"];
  }
  public function cargar2()
  {
    $this->valor2=$_GET["valor2"];
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

class Resta extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1-$this->valor2;
  }
}

class Modulo extends Operacion{
  public function operar(){
    $this->resultado = $this->valor1%$this->valor2;
  }
}

$suma=new Suma();
$suma->cargar1();
$suma->cargar2();
$suma->operar();
echo 'El resultado de la suma de '.$_GET['valor1'].' y '.$_GET['valor2'].' es:';
$suma->imprimirResultado();

$resta=new Resta();
$resta->cargar1();
$resta->cargar2();
$resta->operar();
echo 'El resultado de la diferencia de '.$_GET['valor1'].' y '.$_GET['valor2'].'  es:';
$resta->imprimirResultado();

$modulo = new Modulo();
$modulo->cargar1();
$modulo->cargar2();
$modulo->operar();
echo 'El resultado del modulo entre '.$_GET['valor1'].' y '.$_GET['valor2'].' es:';
$modulo->imprimirResultado();

?>
</body>
</html> 