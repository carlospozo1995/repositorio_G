<!DOCTYPE html>
<html>
<head>
	<?php 
		include "../links-scripts/links.php"; 
		include "../links-scripts/scripts.php";
	?>
	<title>Productos</title>
</head>
<body>
	<?php 
		include "puzzle_system/header.php"; 
	?>

	<h2>LISTA DE PRODUCTOS</h2>

	<?php include "puzzle_system/search.php"; ?>
	
	<div id="loader"><img src="../img_system/loading.gif"></div>
	<div class="list_products">
		<!-- Lista de productos pintada por ajax -->
	</div>

</body>
</html>