<!DOCTYPE html>
<html>
<body>

<?php  
$numeros = array(1, 3, 16, 17, 4, 2, 9, 11, 20, 0, 15, 13, 19, 5, 10); 

foreach ($numeros as $num) {
	if($num%2 == 1 && $num>5 && $num%5 == 0)
  		echo "$num<br>";
}
?>  

</body>
</html>