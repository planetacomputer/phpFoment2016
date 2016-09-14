<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// define variables and set to empty values
$nameErr = $apellidoErr = $genderErr = "";
$name = $apellido = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"): 

	if (empty($_POST["nombre"])) {
		$nameErr = "Nombre es obligatorio";
	} else {
		$name = test_input($_POST["nombre"]);
		if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
			$nameErr = "Solo se permiten letras y espacios en blanco"; 
		}
	}

	if (empty($_POST["apellido"])) {
		$apellidoErr = "Apellido es obligatorio";
	} else {
		$apellido = test_input($_POST["apellido"]);
	}

	if (empty($_POST["genero"])) {
		$genderErr = "Sexo necesario";
	} else {
		$gender = test_input($_POST["genero"]);
	}

	?>
	<?php if(empty($nameErr) && empty($apellidoErr)): ?>
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
	<?php endif ?>	
<?php endif ?>
<hr>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="w3-container w3-card-4 w3-light-grey">
<h3>Formulario:</h3>
<p>
<label>Nombre</label><span class="w3-text-red">* <?php echo $nameErr;?></span>
<input class="w3-input" type="text" name="nombre" value="<?= $name ?>"></p>

<label>Apellido</label><span class="w3-text-red">* <?php echo $apellidoErr;?></span>
<input class="w3-input" type="text" name="apellido" value="<?= $apellido ?>"></p>

<input class="w3-radio" type="radio" name="genero" value="hombre" <?php if (isset($gender) && $gender=="hombre") echo "checked";?> value="hombre">
<label class="w3-validate">Hombre</label>

<input class="w3-radio" type="radio" name="genero" <?php if (isset($gender) && $gender=="mujer") echo "checked";?> value="mujer" >
<label class="w3-validate">Mujer</label><span class="w3-text-red">* <?php echo $genderErr;?></span>
<hr>
<input class="w3-margin" type="submit" name="">
</form>

</body>
</html>