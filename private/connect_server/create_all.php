<?php

	$host = "mysql.hostinger.es";
	$user = "u851285105_user";
	$pass = "Windows10";
	$db = "u851285105_name";

	$Connect = new mysqli($host, $user, $pass);

	$Connects = new mysqli($host, $user, $pass, $db);

	$sql = "CREATE TABLE login (
			id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
			name VARCHAR(50) NOT NULL, 
			lastname VARCHAR(50) NOT NULL,
			username VARCHAR(50) NOT NULL UNIQUE, 
			password VARCHAR(300) NOT NULL
		)";

	if ($Connects->query($sql)){
		echo "\nLa base de datos y la tabla fueron creadas con exito\n";
	} else {
		echo "\nHa ocurrido un error.\n";
	}

?>