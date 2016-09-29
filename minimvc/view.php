<?php
require_once('models.php');

function set_identificadores($vista) {
	$identificadores = array();
	if($vista) {
		switch ($vista) {
		case 'vista_1':
		$identificadores = array('propiedad');
		break;
		case 'vista_2':
		$identificadores = array('propiedad_1', 'propiedad_2');
		break;
		}
		return $identificadores;
	}
}

function armar_diccionario($vista, $data) {
	$diccionario = array();
	$identificadores = set_identificadores($vista);
	if($identificadores) {
		foreach ($identificadores as $identificador) {
			if(array_key_exists($identificador, $data)) {
				$diccionario[$identificador] = $data[$identificador];
			}
		}
	}
	return $diccionario;
}

function render_data($vista, $data) {
	$html = '';
	if(($vista)&&($data)) {
		$diccionario = armar_diccionario($vista, $data);
		if($diccionario) {
			$html = file_get_contents('html/'.$vista.'.html');
			foreach ($diccionario as $clave=>$valor) {
				$html = str_replace('{'.$clave.'}', $valor, $html);
			}
		}
	}
	print $html;
}
/*
//Exemple amb el modelUno
$modelUno = new ModeloUno();
$modelUno->a(32);
settype($modelUno, 'array');
//$modelUno = (array) $modelUno;
//render_data('vista_1', $modelUno);
//Exemple amb el modelDos
$modelDos = array('propiedad_1'=>30, 'propiedad_2'=>50);
render_data('vista_2', $modelDos);
*/
?>