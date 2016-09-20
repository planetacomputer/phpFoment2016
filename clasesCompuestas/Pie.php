<?php
class Pie {
  private $titulo;
  public function __construct($tit)
  {
    $this->titulo=$tit;
  }
  public function graficar()
  {
    echo '<h4 style="text-align:left">'.$this->titulo.'</h4>';
  }
}
?>