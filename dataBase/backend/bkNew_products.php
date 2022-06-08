<?php

// include "C:/laragon/www/carlos/G/dataBase/connect.php";
    $sql_new = "SELECT * FROM cg.productos ORDER BY codproducto DESC LIMIT 10";

    $data_new = consulta($conexion, $sql_new);
    
    if (count($data_new) > 0) {
        foreach ($data_new as $key => $value) {
?>
    <div class="product">
        <a href="description.php">
            <img src="img/uploads/<?php echo $value['imagen'] ?>" alt="">
            <p><?php echo $value['nombre'] ?></p>
            <p><?php echo $value['marca'] ?></p>
            <p><?php echo $value['precio'] ?></p>
        </a>
    </div> 
<?php
        }
    }
?>