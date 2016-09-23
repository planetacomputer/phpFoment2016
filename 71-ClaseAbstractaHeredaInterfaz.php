<?php
require_once '70-interfazEncendible1.php';

//Al ser abstracta, esta clase no se instanciara jamas
//por ello no tiene sentido implementar aqui 
//obligatoriamente los métodos de la interfaz
abstract class Bombilla implements Encendible{ 
   	
}

//$bombilla = new Bombilla();
//$bombilla->encender();
//$bombilla->apagar();
echo "OK - La clase Bombilla esta declarada adecuadamente porque, aunque implementa una interficie, es abstracta y no se ve obligada a implementar los metodos de la interficie.";
?>