<?php
require_once('75-usuarios_model-2.php');

$email = $_GET['email'];
$usuario1 = new Usuario();
$usuario1->get($email);
//print_r($usuario1->getRows());

$template = file_get_contents('87-PlantillaVistaEjercicio-1.tpl');
foreach ($usuario1->getRows()[0] as $clave=>$valor) {
	$template = str_replace('{'.$clave.'}', $valor, $template);
}
print $template;
?>
