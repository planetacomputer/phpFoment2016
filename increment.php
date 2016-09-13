<?php
	function increment(){
		$x = 1;
		$y = $x++;
		return $x;
	}
	echo "El numero devuelto es ".increment()."<br>";
?>