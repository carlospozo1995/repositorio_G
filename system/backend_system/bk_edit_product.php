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
       
    }



?>