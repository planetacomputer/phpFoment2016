<?php
$myfile = fopen("include/webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
$i = 1;
while(!feof($myfile)) {
	$a=trim(fgets($myfile), "\r\n");
  //if(strpos($a=fgets($myfile), "Vector")){
  	echo $i." - (".strlen($a).") - ".$a . "<br>";
  //}
  $i++;
}
fclose($myfile);
?>