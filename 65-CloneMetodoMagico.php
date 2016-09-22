<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Persona {
  private $nombre;
  private $edad;
  public function fijarNombreEdad($nom,$ed)
  {
    $this->nombre=$nom;
    $this->edad=$ed;
  }
  public function retornarNombre()
  {
    return $this->nombre;
  }
  public function retornarEdad()
  {
    return $this->edad;
  }
  public function __clone()
  {
    $this->edad++;
  }
}

$persona1=new Persona();
$persona1->fijarNombreEdad('Juan',20);
//echo 'Datos de $persona1:';
//echo $persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';
$persona2=clone($persona1);
//echo 'Datos de $persona2:';
//echo $persona2->retornarNombre().' - '.$persona2->retornarEdad().'<br>';
$persona = new Persona();
$persona->fijarNombreEdad('Juan',20);
for ($i=0; $i < 10; $i++) { 
  $persona1 = clone($persona);
  echo 'Datos de $persona'.$i.':'. $persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';
  $persona = $persona1;
}

?>
</body>
</html>