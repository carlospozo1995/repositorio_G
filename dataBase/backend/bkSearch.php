<?php 


    include "../connect.php";

    $getOption = $_GET['option']; //GET URL
    $wordSearch = $_POST['sendWord']; //VALUE INPUT


    if ($getOption == 'search') {

        if (!empty($wordSearch)) {
            $sql_search = "SELECT * FROM cg.productos WHERE (nombre LIKE '%$wordSearch%' OR marca LIKE '%$wordSearch%') AND estatus = 1 LIMIT 6";

            $data_search = consulta($conexion, $sql_search);

            $result_search  = array_map(function($item_search){
                $item_search['nombre'] = $item_search['nombre'];
                $item_search['marca'] = $item_search['marca'];
                return $item_search;
            }, $data_search);
        }  

       echo json_encode($result_search);
    }

?>