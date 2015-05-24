<?php
	include ("../private/connect_server/connect_server.php");

	$encrypt = md5($_POST['password']);

	if (isset($_POST['login']) && !empty($_POST['username']) && !empty($encrypt)){
		$cont = 0;
		$query = "SELECT id, name, lastname, username, password FROM login;";
		$result = $Connect->query($query);
		while ($row = $result->fetch_array(MYSQLI_ASSOC)){
			if (($_POST['username'] == $row['username']) && ($encrypt  == $row['password'])){
				@session_start();
				$_SESSION['login'] = "yes";
				$_SESSION['username'] = $_POST['username'];
				header("Location: ../private/desktop/desktop");
			} else {
				$cont++;
			}
		}

		if ($cont > 0){
			?>
			<script type="text/javascript">
				alert("Datos incorrectos...");
				window.location.href="../index";
			</script>
			<?php
		}

	}
?>