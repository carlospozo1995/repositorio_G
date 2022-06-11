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
					<?php echo $alert ?$alert:''; ?>
				</div>

				<input type="text" name="name" placeholder="Nombre" value="">
				<input type="text" name="precio" placeholder="Precio" value="">
				<input type="text" name="marca" placeholder="Marca" value="">
				<label for="categoria">Categoria</label>
				<select name="categoria" id="categoria">
					<?php
					
					if (count($data_category) > 0) {
						foreach ($data_category as $key => $value) {
					?>
							<option value="<?php echo $value['id'] ?>"><?php echo $value['nombre_level'].$value['item_menu'] ?></option>
					<?php
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
				
				<!-- <textarea name="descripcion" placeholder="Descripción"></textarea> -->
				<button type="submit">Agregar</button>

			</form>
		</div>
	</section>

</body>
</html>