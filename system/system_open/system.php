<!DOCTYPE html>
<html>
<head>
	<?php 
		include "../links-scripts/links.php"; 
		include "../links-scripts/scripts.php";
	?>
	<title>Créditos GUAMAN - Bienvenido al sistema</title>
</head>
<body>
	<?php include "puzzle_system/header.php"; ?>

	<section  class="options">
		<?php 
		if ($_SESSION['id_user'] == 1) {
		?>
			<div>
				<a href="users_list.php">Lista de usuarios</a>
			</div>
		<?php
		}
		?>
			<div>
				<a href="products.php">Productos</a>
			</div>

			<div>
				<a href="add_product.php">Agregar productos</a>
			</div>
	</section>	
</body>
</html>