<!DOCTYPE html>
<html>
<head>
	<?php 
		include "../links-scripts/links.php"; 
		include "../links-scripts/scripts.php";
	?>
	<title>Busqueda productos</title>
</head>
<body>
	<?php 
		include "puzzle_system/header.php"; 
	?>

	<h2>LISTA DE PRODUCTOS BUSCADOS</h2>

	<form action="search_result.php" method="GET" id="">
	    <input type="search" name="buscar" id="" value="">
	    <button type="submit">Buscar</button>
	</form>
	
	<div class="list_products_searh">
		<!-- Lista de productos pintada por ajax -->
	</div>

</body>
</html>