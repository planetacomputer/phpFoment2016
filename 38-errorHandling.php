<?php
if(!file_exists("welcome.txt")) {
  die("Lo siento, File not found");
} else {
  $file=fopen("welcome.txt","r");
}
?>