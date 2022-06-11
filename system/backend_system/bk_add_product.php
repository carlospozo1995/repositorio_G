<?php

	include "C:/laragon/www/carlos/G/dataBase/connect.php";
	
	// CONSULTA PARA OBTENER LOS DATOS DE LA CATEGORIA

	$sql_category = "SELECT * FROM cg.menu_categoria where level_product like '%level3%' ORDER BY item_menu ASC";

	$data_category = consulta($conexion, $sql_category);
	// ------------------------------------------

	$alert = "";

	

?>