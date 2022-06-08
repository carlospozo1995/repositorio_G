<?php	
	include "C:/laragon/www/carlos/G/dataBase/connect.php";

	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

	if($action == 'ajax'){
		include "../../dataBase/backend/bkPagination.php"; // DOCUMENTO DE LA PAGINACION
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;

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
	$per_page = 3;
    $adjacents  = 2;
    $offset = ($page - 1) * $per_page;
        
	//CONSULTA CANTIDAD DE REGISTRO DEVUELTOS
    $sql_countProd = "SELECT COUNT(*) AS total_products FROM cg.productos WHERE estatus = 1";
    $data_countProd = consulta($conexion, $sql_countProd);
    $total_prod = $data_countProd[0]['total_products'];
    $total_pages = ceil($total_prod/$per_page);

     // CONSULTA PRINCIPAL MOSTRAR PRODUCTOS
	$sql_products = "SELECT p.codproducto, p.nombre, p.descripcion, format(p.precio, 2) As precio, p.marca, p.imagen, m.item_menu, m.nombre_level FROM cg.productos p INNER JOIN cg.menu_categoria m ON p.id_categoria = m.id WHERE estatus = 1 LIMIT $offset, $per_page";
	$data_products = consulta($conexion, $sql_products);

	if (count($data_products) > 0) {
		foreach ($data_products as $key => $value) {
			echo  "<tr>";
			echo "<td>".$value['codproducto']."</td>";
			echo "<td>".$value['nombre']."</td>";
			echo "<td>".$value['descripcion']."</td>";
			echo "<td>".'$'.$value['precio']."</td>";
			echo "<td>".$value['marca']."</td>";
			echo "<td><img style='width:75px' src='../../uploads/".$value['imagen']."' alt=''></td>";
			echo "<td>".$value['nombre_level'].$value['item_menu']."</td>";
			echo "<td>";
			echo '<a href="edit_product.php?cod='.$value["codproducto"].'">Editar</a>';
			echo ' | <a href="javascript:void(0)">Eliminar</a>';
			echo"</td>";
			echo  "</tr>";
		}
	}
?>
		</tbody>

	</table>

	<div class="container_pagination">
		<?php echo paginate($page, $total_pages, $adjacents);?>
	</div>

<?php
	}
	
?>

