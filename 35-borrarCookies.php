<?php
session_start();
 // set the expiration date to one hour ago
 setcookie('user', '', time()-3600, '/')
?>
<html>
<body>

<?php
	echo "Cookie 'user' is deleted.";
?>
<br><a href="34-cookies.php">Comprobar cookie user</a>

<?php echo  $_SESSION["favcolor"] ?>
</body>
</html>