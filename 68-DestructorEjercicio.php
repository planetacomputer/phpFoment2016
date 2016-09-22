<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

class Prueba {
  public function __construct()
  {
    echo 'Se ejecutó el constructor<br>';
  }
  public function __destruct()
  {
    echo 'Se ejecutó el destructor<br>';
  }
}
$p=new Prueba();

?>
</body>
</html>