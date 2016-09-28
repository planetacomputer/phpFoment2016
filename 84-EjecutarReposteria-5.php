<?php
require_once("82-BizcochueloVainillaReposteria-3.php");

//Instancio un bizcochuelo
$bizcochuelo = new Bizcochuelo();

//Anyado ingredientes
$bizcochuelo->set_ingredientes();

//Muestro ingredientes
echo "<b>Bizcochuelo</b><br>".$bizcochuelo->get_ingredientes();


//Instancio un bizcochueloVainilla
$bizcochueloVainilla = new BizcochueloVainilla();

//Anyado ingredientes
//$bizcochueloVainilla->set_ingredientes();

//Muestro ingredientes
echo "<b>Bizcochuelo Vainilla</b><br>".$bizcochueloVainilla->get_ingredientes();
