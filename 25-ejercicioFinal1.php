<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<title></title>
</head>
<body class="w3-container">
<?php if(empty($_GET['num1']) || empty($_GET['num2'])): ?>
	<div class="w3-panel w3-red">
	  <h3>Atencion!</h3>
	  <strong>Perdona pero algun parametro esta vacio</strong>
	</div>
	
<?php else: ?>
	<div class="w3-panel w3-green">
	  <h3>Perfecto!</h3>
	  La suma da: <?php echo $_GET['num1'] + $_GET['num2'] ?>
	</div>
	
<?php endif ?>
</body>
</html>