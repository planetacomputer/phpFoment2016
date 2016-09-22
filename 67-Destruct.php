<?php
class Banner {
  private $ancho;
  private $alto;
  private $mensaje;
  private $imagen;
  private $colorTexto;
  private $colorFondo;
  public function __construct($an,$al,$men)
  {
    $this->ancho=$an;
    $this->alto=$al;
    $this->mensaje=$men;
    $this->imagen=imageCreate($this->ancho,$this->alto);
    $this->colorTexto=imageColorAllocate($this->imagen,255,255,0);
    $this->colorFondo=imageColorAllocate($this->imagen,255,0,0);
    imageFill($this->imagen,0,0,$this->colorFondo);
  }
  public function graficar()
  {
    imageString ($this->imagen,5,50,10, $this->mensaje,null);
    header ("Content-type: image/png");
    imagePNG ($this->imagen);
  }
  public function __destruct()
  {
    imageDestroy($this->imagen);
  }
}

$baner1=new Banner(428,45,'Sistema de Ventas por Mayor y Menor');
$baner1->graficar();
?> 