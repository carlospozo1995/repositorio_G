<?php
    include "C:/laragon/www/carlos/G/dataBase/connect.php";
    $value = $_POST['value'];

    $action = (isset($_POST['action']) && $_REQUEST['action']) != NULL ? $_REQUEST['action']:'';

    if ($action == 'ajax') {
        include "bkPagination.php"; // DOCUMENTO DE LA PAGINACION
        $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;

        $per_page = 2;
        $adjacents  = 2;
        $offset = ($page - 1) * $per_page;
        
        if ($value == '') {
            echo '<p>Ingrese una palabra ha buscar </p>';
        }
        else{
            // CONSULTA DE CONTEO DE RESULTADO
            $sql_count = "SELECT COUNT(p.nombre) AS total_products, COUNT(p.marca)AS total_products, COUNT(m.item_menu) AS total_products FROM cg.productos p INNER JOIN cg.menu_categoria m ON p.id_categoria = m.id WHERE (nombre LIKE '%$value%' OR marca LIKE '%$value%' OR item_menu LIKE '%$value%') AND estatus = 1";

            $data_count =  consulta($conexion, $sql_count);
            $total = $data_count[0]['total_products'];
            $total_pages = ceil($total/$per_page);

            // CONSULTA PRINCIPAL
            $sql_search = "SELECT p.codproducto, p.nombre, p.descripcion, format(p.precio, 2) As precio, p.marca, p.imagen, m.item_menu, m.nombre_level FROM cg.productos p INNER JOIN cg.menu_categoria m ON p.id_categoria = m.id WHERE (nombre LIKE '%$value%' OR marca LIKE '%$value%' OR item_menu LIKE '%$value%') AND estatus = 1 LIMIT $offset, $per_page";

            $data_search = consulta($conexion, $sql_search);

            if (count($data_search) > 0) {
?>
                <table class="table table-striped">

                    <thead style="background: black; color: white; text-align: center;">
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
<?php   
                    foreach ($data_search as $key => $value) {
                        echo  "<tr>";
                        echo "<td>".$value['codproducto']."</td>";
                        echo "<td>".$value['nombre']."</td>";
                        echo "<td>".$value['descripcion']."</td>";
                        echo "<td>".'$'.$value['precio']."</td>";
                        echo "<td>".$value['marca']."</td>";
                        echo "<td><img style='width:75px' src='../../uploads/".$value['imagen']."' alt=''></td>";
                        echo "<td>".$value['nombre_level'].$value['item_menu']."</td>";
                        echo "<td>";
                        echo '<a href="edit_product.php?cod='.$value["codproducto"].'"><img src="../img_system/edit.png" title="Editar producto"></a>';
                        echo ' | <a href="javascript:void(0)"><img src="../img_system/delete.png" title="Eliminar producto"></a>';
                        echo"</td>";
                        echo  "</tr>";
                    }
?>
                    </tbody>

                </table >

                <div class="container_pagination">
                    <?php echo paginate($page, $total_pages, $adjacents);?>
                </div>
<?php
            }
            else{
                echo '<p>El producto '.$value.' no existe</p>';
            }
        }
        
    }

?>