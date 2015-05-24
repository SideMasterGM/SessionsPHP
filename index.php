<!DOCTYPE html>

<?php
	@session_start();
	if (@$_SESSION['login'] == "yes"){
		header("Location: private/desktop/desktop");
	}
?>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<form action="php/login.php" method="post">
			<h2>Login</h2>
			<input type="text" id="username" name="username" placeholder="Nombre de usuario" required autofocus /><br/>
			<input type="password" id="password" name="password" placeholder="Contrase&ntilde;a" required /><br/>
			<input type="submit" value="Login" name="login" />
		</form>
		<hr/>
		<form action="php/signin.php" method="post">
			<h2>Sign In</h2>
			<input type="text" id="name" name="name" placeholder="Nombre" required /><br/>
			<input type="text" id="lastname" name="lastname" placeholder="Apellido" required /><br/>
			<input type="text" id="username" name="username" placeholder="Nombre de usuario" required /><br/>
			<input type="password" id="password" name="password" placeholder="Contrase&ntilde;a" required /><br/>
			<input type="submit" value="Sign In" name="signin" />
		</form>

	</body>
</html>