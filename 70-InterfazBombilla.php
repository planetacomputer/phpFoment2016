<?php
require_once '70-interfazEncendible1.php';

class Bombilla implements Encendible{ 
   	public function encender(){ 
      	echo "<br>Y la luz se hizo..."; 
   	} 
   	public function apagar(){ 
      	echo "<br>Y la luz se hizo..."; 
   	}
}

$bombilla = new Bombilla();
$bombilla->encender();
$bombilla->apagar();
?>