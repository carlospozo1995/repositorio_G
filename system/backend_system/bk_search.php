<?php
     include "C:/laragon/www/carlos/G/dataBase/connect.php";
    $value = $_POST['value'];

    $action = (isset($_POST['action']) && $_REQUEST['action']) != NULL ? $_REQUEST['action']:'';

    if ($action == 'ajax') {

        if ($value == '') {
            echo '<p>Ingrese una palabra ha buscar </p>';
        }
        else{
            $sql_search = "SELECT * FROM cg.productos WHERE (nombre LIKE '%$value%' OR marca LIKE '%$value%') AND estatus = 1";

            $data_search = consulta($conexion, $sql_search);

            if (count($data_search) > 0) {
                echo '<pre>';
                print_r($data_search);
            }
            else{
                echo '<p>El producto '.$value.' no existe</p>';
            }
        }
        

    }

?>