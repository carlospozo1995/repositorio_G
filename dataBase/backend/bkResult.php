<?php

    include "C:/laragon/www/carlos/G/dataBase/connect.php";
    $value_search = $_POST['valueSearch'];

    $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

    if($action == 'ajax'){
        include "bkPagination.php"; // DOCUMENTO DE LA PAGINACION
        
        $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;

        $per_page = 2;
        $adjacents  = 2;
        $offset = ($page - 1) * $per_page;
        //CONDICIONAL CONSULTA
        $where = is_null($value_search) ? '' : "WHERE (nombre LIKE '%$value_search%' OR marca LIKE '%$value_search%' OR item_menu LIKE '%$value_search%')";

        //CONSULTA CANTIDAD DE REGISTRO DEVUELTOS
        $sql_count = "SELECT COUNT(p.nombre) AS total_products, COUNT(p.marca)AS total_products, COUNT(m.item_menu) AS total_products FROM cg.productos p INNER JOIN cg.menu_categoria m ON p.id_categoria = m.id $where AND estatus = 1";

        $data_count =  consulta($conexion, $sql_count);
        $total = $data_count[0]['total_products'];
        $total_pages = ceil($total/$per_page);

        // CONSULTA PRINCIPAL BUSQUEDA 
        $sql_search= "SELECT p.codproducto, p.nombre, p.descripcion, format(p.precio, 2) As precio, p.marca, p.imagen, m.item_menu, m.nombre_level FROM cg.productos p INNER JOIN cg.menu_categoria m ON p.id_categoria = m.id $where AND estatus = 1 ORDER BY nombre ASC LIMIT $offset, $per_page";
        $data_search = consulta($conexion, $sql_search);

        if(count($data_search) > 0){
?>

                <div class="container_pagination">
                    <?php echo paginate($page, $total_pages, $adjacents);?>
                </div>
<?php
            foreach ($data_search as $key => $value) {
?>
                <div class="product">
                   <a href="description.php">
                       <img src="uploads/<?php echo $value['imagen'] ?>" alt="">
                       <p><?php echo $value['nombre'] ?></p>
                       <p><?php echo $value['marca'] ?></p>
                       <p><?php echo $value['precio'] ?></p>
                   </a>
                </div> 
<?php
            }
?>
                <div class="container_pagination">
                    <?php echo paginate($page, $total_pages, $adjacents);?>
                </div>
<?php
        }else{
            echo '<p>Producto '.$value_search.' no encontrado</p>';
        }
    
    }

?>