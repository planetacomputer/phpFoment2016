<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Persona {
  //Estas son las propiedades de la clase
  private $nombre;
  private $edad;

  //Estos son los métodos de la clase
  public function inicializar($nom, $edad)
  {
    $this->nombre=$nom;
    $this->edad=$edad;
  }
  public function imprimir()
  {
    echo $this->nombre;
    echo '-';
    echo $this->edad;
    echo '<br>';
  }
  public function cumpleanos(){
    $this->edad++;
  }
}

$per1=new Persona();
$per1->inicializar('Juan', 21);
$per1->imprimir();
$per1->cumpleanos();
$per1->imprimir();

$per2=new Persona();
$per2->inicializar('Ana', 12);
$per2->imprimir();
$per2->cumpleanos();
$per2->imprimir();
?>
</body>
</html>