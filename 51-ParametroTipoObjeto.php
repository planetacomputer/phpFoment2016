<html>
<head>
<meta http-equiv="refresh" content="10">
<title>Pruebas</title>
</head>
<body>
<?php
require '48-Celda.php';
class Tabla {
  private $mat = array();
  private $cantFilas;
  private $cantColumnas;
  private $color;

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

  /*public function cargar($fila,$columna,$valor, $colorTexto, $colorFondo)
  {
    $this->mat[$fila][$columna]=new Celda($valor, $colorTexto, $colorFondo);
  }*/

  public function insertar($fila,$columna,$celda)
  {
    $this->mat[$fila][$columna]=$celda;
  }



  private function inicioTabla()
  {
    echo '<table>';
  }
    
  private function inicioFila()
  {
    echo '<tr>';
  }

  private function mostrar($fi,$co)
  {
    echo '<td>'.$this->mat[$fi][$co]->graficar().'</td>';
  }

  private function finFila()
  {
    echo '</tr>';
  }

  private function finTabla()
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
$color = 'black';
$colorFondo = 'cyan';
$arrColoresFondo = array('maroon', 'green', 'brown', 'magento', 'blue', 'red');
$tabla1=new Tabla($filas,$columnas);
for ($i=1; $i <= $filas ; $i++) { 
  for ($j=1; $j <= $columnas; $j++) {
    $celda = new Celda($secuencia, $color, $arrColoresFondo[mt_rand(0, count($arrColoresFondo)-1)]);
    $tabla1->insertar($i,$j, $celda);
    //$tabla1->cargar();
    //$secuencia = $secuencia + $incremento;
    $secuencia += $incremento;
  }
}
echo $tabla1->getCantFilas()."x".$tabla1->getCantColumnas();
$tabla1->graficar();
?>

</body>
</html>