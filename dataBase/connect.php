<?php

    $conexion = new mysqli('localhost', 'root', '', 'cg');
    $conexion -> set_charset('utf8');
    if ($conexion -> connect_error) {
        die("La conexion a la base de datos ha fallado" . $conexion -> connect_error);
        return false;
    }


    //  FUNCTIONS

    function consulta($connect, $sql){
        $result = $connect -> query($sql);
        $data = array();
        while ($item = mysqli_fetch_assoc($result)) {
            $data[] = $item;
        }
        return $data;
    }
    
?>