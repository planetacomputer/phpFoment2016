<?php

enviar_data();

function enviar_data() {
	$vista = capturar_evento();
	if($vista) {
		$modelo = identificar_modelo($vista);
		if($modelo) {
			$data = invocar_modelo($modelo);
			if($data) {
				require_once('view.php');
				render_data($vista, $data);
			}
		}
	}
}

function capturar_evento() {
	$vista = '';
	if($_GET) {
		if(array_key_exists('vista', $_GET)) {
			$vista = $_GET['vista'];
		}
	}
	return $vista;
}

//Identificar el model a partir del parametre de la request
function identificar_modelo($vista) {
	if($vista) {
		switch ($vista) {
			case 'vista_1':
				$modelo = 'ModeloUno';
			break;
			case 'vista_2':
				$modelo = 'ModeloDos';
			break;
			default:
				exit();
		}
	}
	return $modelo;
}

//Instancia el model ModeloUno o ModeloDos
function invocar_modelo($modelo) {
	if($modelo) {
		require_once('models.php');
		$data = new $modelo();
		//emplena l'objecte del model
		if($modelo == 'ModeloUno'){
			$data->a($_GET['propiedad']);
		}
		else{
			$data->b($_GET['propiedad_1'], $_GET['propiedad_2']);
		}
		
		settype($data, 'array');
		//print_r($data);
		return $data;
	}

	#las modificaciones al modelo se harían aquí
}

?>