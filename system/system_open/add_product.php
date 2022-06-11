<!DOCTYPE html>
<html>
<head>
	<?php 
		include "../links-scripts/links.php"; 
		include "../links-scripts/scripts.php";
	?>
	<title>Agregar Producto</title>
</head>
<body>
	<?php include "puzzle_system/header.php"; ?>
	<?php include "../backend_system/bk_add_product.php"; ?>

	<section class="add_product_container">
		<div class="add_product">
			<h2>Agregar producto</h2>
			<hr>

			<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
				<div class="msm_alert">
				<?php if (!empty($_POST)) {
						echo $alert;
					} ?>
				</div>

				<input type="text" name="name" placeholder="Nombre" value="<?php if(!empty($_POST)){echo $name;} ?>">
				<input type="text" name="precio" placeholder="Precio" value="<?php if(!empty($_POST)){echo $price;} ?>">
				<input type="text" name="marca" placeholder="Marca" value="<?php if(!empty($_POST)){echo $mark;} ?>">
				<label for="categoria">Categoria</label>
				<select id="categoria" name="categoria">
					<?php
					
					// CONSULTA PARA OBTENER LOS DATOS DE LA CATEGORIA

					$sql_category = "SELECT * FROM cg.menu_categoria where level_product LIKE '%level3%' ORDER BY item_menu ASC";

					$data_category = consulta($conexion, $sql_category);

					if (count($data_category) > 0) {
						foreach ($data_category as $key => $value) {
							echo "<option value='".$value['id']."'>".$value['nombre_level'].$value['item_menu']."</option>";
						}
					}

					?>
				</select>
				<div class="photo">
					<label for="foto">Foto</label>
			        <div class="prevPhoto">
			        	<span class="delPhoto notBlock">X</span>
			    		<label for="foto"></label>
			        </div>
			        <div class="upimg">
			        	<input type="file" name="foto" id="foto" accept=".png, .jpg, .webp">
			        </div>
			        <div id="form_alert"></div>
				</div>
				
				<textarea name="descripcion" placeholder="Descripción"></textarea>
				<button type="submit">Agregar</button>

			</form>
		</div>
	</section>

</body>
</html>