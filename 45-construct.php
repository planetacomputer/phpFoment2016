<html>
<head>
<title>Pruebas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  private $color;
  public function __construct($tit,$ubi,$color)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
    $this->color = $color;
  }
  public function graficar()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
    echo $this->titulo;
    echo '</div>';
  }

  public function graficar2(){
    echo '<div class="w3-container w3-'.$this->ubicacion.' w3-text-'.$this->color.'">'.$this->titulo.'</div><hr>';
  }
}

$cabecera=new CabeceraPagina('El blog del programador','right', 'red');
$cabecera->graficar2();

$cabecera2=new CabeceraPagina('El blog del programador','left', 'blue');
$cabecera2->graficar2();

$cabecera3=new CabeceraPagina('El blog del programador','left', 'green');
$cabecera3->graficar2();

?>
</body>
</html> 