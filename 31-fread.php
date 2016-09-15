<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("include/webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile, 4);
fclose($myfile);
?>

</body>
</html>