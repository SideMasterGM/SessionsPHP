<meta charset="utf-8" />
<?php

	include ("../connect_server/connect_server.php");

	@session_start();
	if (@$_SESSION['login'] != "yes"){
		header("Location: ../../index");
	}

	$query = "SELECT name, lastname FROM login WHERE username = '".$_SESSION['username']."'";
	$result = $Connect->query($query);
	while ($row = $result->fetch_array(MYSQLI_ASSOC)){
		?>
			<h1> Bienvenido <?php echo $row['name']." ".$row['lastname'] ?> </h1>
			<form action="" method="post">
				<input type="submit" value="Logout" id="logout" name="logout" />
			</form>
		<?php
	}

	if (isset($_POST['logout'])){
		@session_destroy();
		header("Location: ../../index");
	}

?>