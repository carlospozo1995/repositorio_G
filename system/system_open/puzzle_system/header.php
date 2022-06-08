<?php	

	session_start();
	if (empty($_SESSION['active'])) {
		header('location: ../login.php');
	}

?>

<header>
	<?php echo $_SESSION['nombre'] ?>
	<a href="../backend_system/close_system.php">Salir</a>
</header>
