<?php
require_once("80-PostreReposteria-1.php");
class Alfajor implements Postre {
 public function set_ingredientes() {
   $this->ingredientes = array('Tapas de maizena' => 2,
   'dulce de leche'=>'1 cda. sopera',
   'coco rallado'=>'1 cdta. de te');
 }
 function __construct() {
   $this->set_ingredientes();
 }
}