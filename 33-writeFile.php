<?php
	if(filesize("include/newfile.txt") < 1000){
		$myfile = fopen("include/newfile.txt", "a") or die("Unable to open file!");
		$txt = "Mickey Mouse\n";
		fwrite($myfile, $txt);
		$txt = "Minnie Mouse\n";
		fwrite($myfile, $txt);
		fclose($myfile);
		echo "Este fichero pesa ahora ".filesize("include/newfile.txt");
	}
	else{
		echo "Ya no puedes escribir más";
	}
?>