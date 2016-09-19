<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Tabla {
  private $mat=array();
  private $cantFilas;
  private $cantColumnas;

  public function getCantFilas(){
    return $this->cantFilas;
  }

  public function getCantColumnas(){
    return  $this->cantColumnas;
  }

  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }

  public function cargar($fila,$columna,$valor)
  {
    $this->mat[$fila][$columna]=$valor;
  }

  public function inicioTabla()
  {
    echo '<table  border="1">';
  }
    
  public function inicioFila()
  {
    echo '<tr>';
  }

  public function mostrar($fi,$co)
  {
    echo '<td>'.$this->mat[$fi][$co].'</td>';
  }

  public function finFila()
  {
    echo '</tr>';
  }

  public function finTabla()
  {
    echo '</table>';
  }

  public function graficar()
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
        $this->mostrar($f,$c);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}

$secuencia = 5;
$incremento = 3;
$filas = 16;
$columnas = 15;
$tabla1=new Tabla($filas,$columnas);
for ($i=1; $i <= $filas ; $i++) { 
  for ($j=1; $j <= $columnas; $j++) { 
    $tabla1->cargar($i,$j,$secuencia);
    //$secuencia = $secuencia + $incremento;
    $secuencia += $incremento;
  }
}
echo $tabla1->getCantFilas()."x".$tabla1->getCantColumnas();
$tabla1->graficar();
?>

</body>
</html>