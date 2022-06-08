<?php

include "C:/laragon/www/carlos/G/dataBase/connect.php";
    $option_id = $_POST['valueId'];
    $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

    if($action == 'ajax'){
        include "bkPagination.php";

        $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;

        $per_page = 2;
        $adjacents  = 2;
        $offset = ($page - 1) * $per_page;

        $ids = array();
        
        $sql_cMenu = "SELECT * FROM cg.menu_categoria";
        $data_cMenu  = consulta($conexion, $sql_cMenu);

        function getids($cMenuC, $cMenuM, &$ids, $idget=''){
                    
            foreach ($cMenuC as $key => $value) {
                $id = !empty($idget) ? $idget : $value['id'];

                $son_id  = array_filter($cMenuM, function($item) use ($id){
                    return $item['father_id'] == $id;
                });

                if (count($son_id) > 0) {
                    $ids = array_merge($ids, array_column($son_id, "id"));
                    getids($son_id, $cMenuM, $ids);
                }
            }
        }

        if (count($data_cMenu) > 0) {
            getids($data_cMenu, $data_cMenu, $ids, $option_id);
        }

        if (count($ids) == 0) {
            $ids = array_merge($ids,array($option_id));
        }

        if(count($ids) > 0){
            $ids = array_unique($ids);
            $implode = implode(",",$ids);
            $products = array();

            //CONSULTA CANTIDAD DE REGISTRO DEVUELTOS
            $sql_countC = "SELECT COUNT(*) AS total_products FROM cg.productos WHERE id_categoria IN (".$implode.") AND estatus = 1";

            $data_countC = consulta($conexion, $sql_countC);
            $total_C = $data_countC[0]['total_products'];
            $total_pages = ceil($total_C/$per_page);

            // CONSULTA PRINCIPAL CATEGORIA
            $sql_Category = "SELECT nombre, marca, descripcion, format(precio, 2) AS precio, imagen FROM cg.productos WHERE id_categoria IN (".$implode.") AND estatus = 1 ORDER BY nombre ASC LIMIT $offset, $per_page";

            $data_Category = consulta($conexion, $sql_Category);

            if(count($data_Category) > 0){
?>
            <div class="container_pagination">
                <?php echo paginate($page, $total_pages, $adjacents);?>
            </div>
<?php
                foreach ($data_Category as $key => $value) {
?>
                    <div class="product">
                        <a href="description.php">
                            <img src="uploads/<?php echo $value['imagen'] ?>" alt="">
                            <p><?php echo $value['marca'].' - '.$value['nombre'] ?></p>
                            <p><?php echo '$ '.$value['precio'] ?></p>
                            <p><?php echo $value['descripcion'] ?></p>
                        </a>
                    </div> 
<?php
                }
?>
                    <div class="container_pagination">
                        <?php echo paginate($page, $total_pages, $adjacents);?>
                    </div>
<?php
            };
        }
    }

?>