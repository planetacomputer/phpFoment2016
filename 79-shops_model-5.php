<?php

require_once('74-db_abstract_model-1.php');

class Shop extends DBAbstractModel {
	protected $idShop;
	public $nombre;
	public $tipo;
	public $ubicacion;
	public $codigo;
	public $nif;
	public $alta;
	private $idUser;

	function __construct() {
 		$this->db_name = 'book_example';
 	}

 	public function get($nif='') {
 		if(!empty($nif)){
 			$this->query = "
 			SELECT idShop, nombre, tipo, ubicacion, codigo, nif, alta, idUser
 			FROM shops
 			WHERE nif = \"$nif\"
 			";
			$this->get_results_from_query();
 		}
 		if(count($this->rows) == 1){
		 foreach ($this->rows[0] as $propiedad=>$valor){
		 	$this->$propiedad = $valor;
		 }
	 	}
 	}

	public function edit($shop_data=array()) {
		if(array_key_exists('nif', $shop_data)):
			$this->get($shop_data['nif']);
				if($shop_data['nif'] == $this->nif):
					foreach ($shop_data as $campo=>$valor):
						//Por defecto asignamos el valor del array al campo
						$$campo = $valor;
					    //Pero si el valor es vacio dejamos el anterior 
						if(empty($valor)):
							$$campo = $this->$campo;
						endif;					
					endforeach;
					$this->query = "
					UPDATE shops
					SET nombre='$nombre',
					tipo='$tipo',
					ubicacion='$ubicacion',
					codigo='$codigo',
					nif='$nif',
					alta='$alta',
					idUser='$idUser'
					WHERE nif = '$nif'
					";
					$this->execute_single_query();
				else:
					echo "No existe esta tienda para actualizar";
				endif;
		else:
			echo "Has de informar el campo nif";
		endif;
	}

 	public function set($shop_data=array()){
 		if(array_key_exists('nif', $shop_data)):
	 	 $this->get($shop_data['nif']);
		 if($shop_data['nif'] != $this->nif):
		 	 echo "Pasa por la creacion de usuario";
			 foreach ($shop_data as $campo=>$valor):
			 	$$campo = $valor;
			 endforeach;
			 $this->query = "
			 INSERT INTO shops
			 (nombre, tipo, ubicacion, codigo, nif, alta, idUser)
			 VALUES
			 ('$nombre', '$tipo', '$ubicacion', '$codigo', '$nif', '$alta', '$idUser')
			 ";
			 $this->execute_single_query();
	     else:
	     	echo "NIF repetido";
		 endif;
		else:
			echo "NIF sin valor";
	 	endif;
 	}

	public function delete($nif='') {
	 	if(!empty($nif)):
			$this->get($nif);
			if($this->nif == $nif):
				 $this->query = "
				 DELETE FROM shops
				 WHERE nif = '$nif'
				 ";
				 $this->execute_single_query();
			else:
				echo "Esta tienda con este nif no existe.";
			endif;
		else:
			echo "el valor nif no se encuentra informado.";
		endif;
	}

}
?>