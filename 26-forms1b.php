<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<title></title>
</head>
<body>
<div class="w3-card-4">

	<header class="w3-container w3-light-grey">
	  <h1>Hola</h1>
	</header>

	<div class="w3-container">

	  <p>Hola <?= $_POST['nombre'] ?> <?= $_POST['apellido'] ?>, t&uacute; eres <?= $_POST['genero'] ?></p>
	</div>

	<footer class="w3-container w3-light-grey">
	  <h5>Gracias por tu atenci&oacute;n</h5>
	</footer>

</div>
</body>
</html>