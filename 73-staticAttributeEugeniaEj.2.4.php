<?php
class Cliente {
	static public $nombre_completo = 'Cliente desconocido';
	protected $id = 1001;
}
$cliente = new Cliente();
print $cliente::$nombre_completo;


?>