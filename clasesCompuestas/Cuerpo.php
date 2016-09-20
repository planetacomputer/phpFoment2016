<?php
class Cuerpo {
  private $lineas=array();
  public function insertarParrafo($li)
  {
    $this->lineas[]=$li;
  }
  public function graficar()
  {
    for($f=0;$f<count($this->lineas);$f++)
    {
      echo '<p>'.$this->lineas[$f].'</p>';
    }
  }
}
?>