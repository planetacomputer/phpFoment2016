<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Estamos en la semana <?= date('W') ?> del año <?= date('Y') ?>
	<hr>
	<?php
	 $d=mktime(11, 14, 54, 13, 55, 2014);
		echo "Created date is " . date("Y-m-d h:i:sa", $d);
	?>
<hr>
	<?= date("D d/m/Y h:i:sa", strtotime("+20 Days")) ?>

	<?php
	$d1=strtotime("July 19");
	$d2=ceil(($d1-time())/60/60/24/30);
	echo "There are " . $d2 ." months until 4th of July.<hr>";
	echo $d1.".<hr>";
	echo time()."<hr>";
	echo floor(2.9)."<hr>";;
	echo ceil(-2.6);

	echo("<h2>Barcelona, Spain</h2>");
	echo("Date: " . date("D M d Y"));
	echo("<br>Sunrise time: ");
	echo(date_sunrise(time(),SUNFUNCS_RET_STRING,41.37,2.17,90,1));
	echo("<br>Sunset time: ");
	echo(date_sunset(time(),SUNFUNCS_RET_STRING,41.37,2.17,90,1));
	?>
</body>
</html>