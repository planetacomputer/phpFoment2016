<?php
	require '72-AbstractSeleccionFutbol.php';
	require_once '72-AbstractFutbolista.php';
	require_once '72-AbstractEntrenador.php';

	$fut1 = new Futbolista(1, 'Iniesta', 'Gzlez', 32, 'delantero');
	$fut2 = new Futbolista(2, 'Xavi', 'Gzlez', 32, 'delantero');
	$entr1 = new Entrenador(1, 'Trainer', 'Gzlez', 32, 874784);

	$futbolistas = array($fut1, $fut2, $entr1);

	foreach ($futbolistas as $key => $value) {
		echo $value->getId()."- Soy ".$value->getNombre().$value->viajar()."<br>";
	}
?>