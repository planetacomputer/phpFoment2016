<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}

if(!isset($_COOKIE['contador'])) {
	echo "<br>Nunca has visitado esta pagina. Bienvenido";
	setcookie("contador", 1, time() + (86400 * 30), "/");
}
else{
	setcookie("contador", $_COOKIE['contador']+1, time() + (86400 * 30), "/");
	echo "<br>Ya habias visitado la pagina ". $_COOKIE['contador']." veces";
}
?>

<html>
<body>



<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
<a href="35-borrarCookies.php">Borrar cookie <?= $cookie_name ?></a>
</body>
</html>