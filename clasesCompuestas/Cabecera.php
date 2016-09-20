<?php
class Cabecera {
  private $titulo;
  public function __construct($tit)
  {
    $this->titulo=$tit;
  }
  public function graficar()
  {
    echo '<h1 style="text-align:center">'.$this->titulo.'</h1>';
  }
}
?>