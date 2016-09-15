<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$a = file_get_contents("include/password");
	echo $a."<br>";
	//Separamos el contenido de la linea en us y pass
	$arrUsPass = explode(":", $a);
	//Obtenemos el usuario
	$usuario = $arrUsPass[0];
	$pass = $arrUsPass[1]; 
	if($_GET['usuario'] == $usuario && $_GET['pass'] == $pass){
		echo "Password correcto";
	}
	else{
		echo "Password incorrecto";
	}	
?>
</body>
</html>