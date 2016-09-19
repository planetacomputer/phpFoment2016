<html>
<head>
<title>Pruebas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

</head>
<body>
<?php
class Menu {
  private $enlaces=array();
  private $titulos=array();
  public function cargarOpcion($en,$tit)
  {
    $this->enlaces[]=$en;
    $this->titulos[]=$tit;
  }
  public function mostrar()
  {
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo '<a title="'.$this->titulos[$f].'" href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
      if($f != count($this->enlaces)-1)
        echo "-";
    }
  }

  public function mostrarVertical(){
    echo '<nav class="w3-sidenav w3-light-grey" style="width:25%">';
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo '<a title="'.$this->titulos[$f].'" href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
    }
    echo '</nav>';
  }
}

$menu1=new Menu();
$menu1->cargarOpcion('http://www.google.com','Google');
$menu1->cargarOpcion('http://www.yahoo.com','Yahoo');
$menu1->cargarOpcion('http://www.msn.com','MSN');
$menu1->cargarOpcion('http://www.duckduckgo.com','DuckDuckGo');
$menu1->mostrarVertical();
?>