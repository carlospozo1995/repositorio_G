<?php

	include "C:/laragon/www/carlos/G/dataBase/connect.php";

	$sql_category = "SELECT id, item_menu, nombre_level FROM cg.menu_categoria where level_product like '%level3%' ORDER by item_menu ASC";
	$data_category = consulta($conexion, $sql_category);

	$alert = "";

	if (!empty($_POST)) {
		// VARIABLES PRINCIPALES
		$name = $_POST['name'];
		$price = $_POST['precio'];
		$mark = $_POST['marca'];
		$category = $_POST['categoria'];
		$description = $_POST['descripcion'];
		$category = $_POST['categoria'];

		// VARIABLES DE LA IMAGEN ESCOGIDA
		$photo = $_FILES['foto'];
		$name_photo = $photo['name'];
		$type_photo = $photo['type'];
		$tmp_name = $photo['tmp_name'];

		if (empty($_POST['name']) || empty($_POST['precio']) || empty($_POST['marca']) || empty($_FILES['foto']) || empty($_POST['descripcion'])) {
			$alert = '<p>los campos no deben estar vacio</p>';
		}
		else{
			$sql_nameRepeat = "SELECT * FROM cg.productos WHERE nombre LIKE '%".$name."%' AND estatus= 1";

			$data_nameRepeat = consulta($conexion, $sql_nameRepeat);

			if (count($data_nameRepeat) > 0) {
				$alert = '<p>El nombre del producto ha registrar ya existe. Ingreselo con otro nombre</p>';
			}
			else{
				
				if ($name_photo != '') {
					$img_destiny = '../../uploads/';
					$img_name = 'img_'.md5(date('d-m-Y H:m:s'));
					$img_product = $img_name.'.png';
					$img_src = $img_destiny.$img_product;
				}

				// INSERTAR PRODUCTO A LA BASE DE DATOS E IMAGEN A UPLOADS
				$insert_product = "INSERT INTO cg.productos(nombre, descripcion, precio, marca, imagen, id_categoria) VALUES('$name', '$description', '$price', '$mark', '$img_product', '$category')";
			
				$result_insert = $conexion -> query($insert_product);
				
				if ($result_insert) {
					if ($name_photo != '') {
						move_uploaded_file($tmp_name, $img_src);
					}
					$alert = '<p>producto registrado exitosamente</p>';
					// $name = '';
					// $price = '';
					// $mark = '';
				}
				else{
					$alert ='<p>producto no registrado</p>';
				}
			}
		}
	}
	

?>