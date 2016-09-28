<?php
require_once("81-BizcochueloReposteria-2.php");

class BizcochueloVainilla extends Bizcochuelo {
 public function set_extra() {
 	$this->ingredientes['esencia de vainilla'] = 'a gusto';
 	print_r($this->ingredientes);
 }

 function __construct() {
   parent::set_ingredientes();
   $this->set_extra();
 }
}