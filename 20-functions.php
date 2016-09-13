<?php
function familyName($fname, $year) {
	$anyo = date("Y")-$year;
    echo "$fname Refsnes. Born in $year. He/she is $anyo years <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
?>