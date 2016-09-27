<?php

require_once('75-usuarios_model-2.php');
require_once('79-shops_model-5.php');

# Traer los datos de una shop
/*$tienda1 = new Shop();
$tienda1->get('19887654R');
print $tienda1->nif."- ".$tienda1->nombre . ' ' . $tienda1->ubicacion . ' existe<br>';
*/
# Crear un nuevo shop
/*$edit_shop_data = array(
 'nombre'=>'Zara',
 'tipo'=>'Faldas',
 'ubicacion'=>'',
 'codigo'=>'',
 'nif'=>'99887654R',
 'idUser'=>''
);
$tienda3 = new Shop();
$tienda3->edit($edit_shop_data);
$tienda3->get($edit_shop_data['nif']);
print $tienda3->nombre . ' ' . $tienda3->apellido . ' ha sido editado<br>';
*/

$tienda4 = new Shop();
$tienda4->delete('65532728K');
print 'ha sido eliminado';

/*
$tienda2 = new Shop();
$tienda2->set($new_shop_data);
$tienda2->get($new_shop_data['nif']);
print $tienda2->nif."- ".$tienda2->nombre . ' ' . $tienda2->ubicacion . ' existe<br>';
*/
/*
# Traer los datos de un usuario
$usuario1 = new Usuario();
$usuario1->get('jacin@mail.com');
print $usuario1->email."- ".$usuario1->nombre . ' ' . $usuario1->apellido . ' existe<br>';

# Crear un nuevo usuario
$new_user_data = array(
 'nombre'=>'Alberto',
 'apellido'=>'Jacinto',
 'email'=>'albert2000@mail.com',
 'clave'=>'jacaranda'
);
$usuario2 = new Usuario();
$usuario2->set($new_user_data);
$usuario2->get($new_user_data['email']);
print $usuario2->nombre . ' ' . $usuario2->apellido . ' ha sido creado<br>';


# Editar los datos de un usuario existente
$edit_user_data = array(
 'nombre'=>'Gabriel',
 'apellido'=>'Lopez',
 'email'=>'jacfdin@mail.com',
 'clave'=>'69274'
);
$usuario3 = new Usuario();
$usuario3->edit($edit_user_data);
$usuario3->get($edit_user_data['email']);
print $usuario3->nombre . ' ' . $usuario3->apellido . ' ha sido editado<br>';
# Eliminar un usuario

$usuario4 = new Usuario();
$usuario4->get('lei@mail.com');
$usuario4->delete('albert2000@mail.com');
print $usuario4->nombre . ' ' . $usuario4->apellido . ' ha sido eliminado';

?>
*/
