<?php

$diccionario = array(
 'Título de la Página'=>'POO y MVC en PHP',
 'keywords'=>'poo, mvc, php, arquitectura de software',
 'description'=>'El paradigma de la programación orientada a objetos con el
patrón arquitectónico MVC en PHP'
);

$template = file_get_contents('85-PlantillaVista-1.tpl');
foreach ($diccionario as $clave=>$valor) {
	$template = str_replace('{'.$clave.'}', $valor, $template);
}
print $template;
?>
