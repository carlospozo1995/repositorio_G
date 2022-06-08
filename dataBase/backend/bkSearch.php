<?php 


    include "../connect.php";

    $getOption = $_GET['option']; //GET URL
    $wordSearch = $_POST['sendWord']; //VALUE INPUT


    if ($getOption == 'search') {

        if (!empty($wordSearch)) {
            $sql_search = "SELECT p.nombre, p.marca, p.imagen, m.item_menu FROM cg.productos p INNER JOIN cg.menu_categoria m ON p.id_categoria = m.id WHERE (nombre LIKE '%$wordSearch%' OR marca LIKE '%$wordSearch%' OR item_menu LIKE '%$wordSearch%') AND estatus = 1 LIMIT 6";

            $data_search = consulta($conexion, $sql_search);
        }  

       echo json_encode($data_search);
    }

?>