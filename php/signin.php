<?php
	include ("../private/connect_server/connect_server.php");

	$validar = strlen($_POST['name']) * strlen($_POST['lastname']) * strlen($_POST['username']) * strlen($_POST['password']);
	$pass = md5($_POST['password']);
	
	if (isset($_POST['signin']) && $validar != 0){
		$query = "INSERT INTO login (id, name, lastname, username, password) VALUES ('','".$_POST['name']."','".$_POST['lastname']."','".$_POST['username']."','".$pass."');";	
		if ($Connect->query($query)){
			?>
			<script type="text/javascript">
				alert("Registro completado...");
				window.location.href="../index";
			</script>
			<?php
		} else {
			?>
			<script type="text/javascript">
				alert("Algo ha salido mal...");
				window.location.href="../index";
			</script>
			<?php
		}
	}
?>