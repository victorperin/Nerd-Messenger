<?php


if (file_exists("config.php")) {
	include "config.php";
}else{
	echo "<h1>Atention: config.php is missing!</h1>";
}


if (file_exists("install.php")) {
	header('Location: install.php');
}else{
	echo "<h1>We need finish the installer!</h1>";
}









