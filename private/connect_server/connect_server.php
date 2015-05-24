<?php
	
	$host = "127.0.0.1";
	$user = "root";
	$pass = "";
	$db = "mydb";

	$Connect = new mysqli($host, $user, $pass, $db);

	if ($Connect->connect_errno){
		echo "Ha ocurrido el siguiente error: ".$Connect->connect_error;
		exit();
	}
?>