<?php
require_once("80-PostreReposteria-1.php");
class Bizcochuelo implements Postre {
 var $ingredientes = array();

 public function set_ingredientes() {
	 $this->ingredientes = array('harina'=>'2 tazas', 'leche'=>'1 taza','azucar'=>'1 taza', 'huevo'=>1
	 	);
 }

 public function get_ingredientes(){
 	$texto = "";
 	foreach ($this->ingredientes as $key => $value) {
 		$texto = $texto.$key."-".$value."<br>";
 	}
 	return $texto;
 }
}