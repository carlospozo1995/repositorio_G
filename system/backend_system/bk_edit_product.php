<?php

    include "C:/laragon/www/carlos/G/dataBase/connect.php";

    if (empty($_GET['cod'])) {
        header('location:../system_open/products.php');
    }

    $cod_product = $_GET['cod'];

    $sql_product_exist = "SELECT p.codproducto, p.nombre, p.descripcion, p.marca, p.imagen FROM cg.productos p WHERE codproducto = $cod_product";

    $data_exist = consulta($conexion, $sql_product_exist);

    if (count($data_exist) == 0) {
        header('location:../system_open/products.php');
    }else{
        foreach ($data_exist as $key => $value) {
            $cod_producto = $value['codproducto'];
            $nombre_prod = $value['nombre'];
            // $descripcion_prod = $value['descripcion'];
            $marca_prod = $value['marca'];
            // $imagen_prod = $value['imagen'];
        }
    }
    
    



	// $sql_category = "SELECT id, item_menu, nombre_level FROM cg.menu_categoria where level_product like '%level3%' ORDER by item_menu ASC";
	// $data_category = consulta($conexion, $sql_category);

    // if (!empty($_POST)) {
    //     $alert = "";

    //     // VARIABLES PRINCIPALES
	// 	$name = $_POST['name'];
	// 	$price = $_POST['precio'];
	// 	$mark = $_POST['marca'];
	// 	$category = $_POST['categoria'];
	// 	$description = $_POST['descripcion'];

	// 	// VARIABLES DE LA IMAGEN ESCOGIDA
	// 	$photo = $_FILES['foto'];
	// 	$name_photo = $photo['name'];
	// 	$type_photo = $photo['type'];
	// 	$tmp_name = $photo['tmp_name'];

    //     if (empty($_POST['name']) || empty($_POST['precio']) || empty($_POST['marca']) || empty($_FILES['foto']) || empty($_POST['descripcion'])) {
	// 		$alert = '<p>los campos no deben estar vacio</p>';
	// 	}else{

    //     }
    // }

?>