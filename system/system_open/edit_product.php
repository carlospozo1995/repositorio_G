<!DOCTYPE html>
<html>
<head>
	<?php 
		include "../links-scripts/links.php"; 
		include "../links-scripts/scripts.php";
	?>
	<title>Actualizar producto</title>
</head>
<body>
	<?php 
		include "puzzle_system/header.php"; 
		include "../backend_system/bk_edit_product.php";
	?>

	<section class="add_product_container">
		<div class="add_product">

			<h2>ACTUALIZAR PRODUCTO</h2>
			<hr>
			<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
				<div class="msm_alert">
					<!-- <?php if (!empty($_POST)) {echo $alert;} ?> -->
				</div>
				<input type="hidden" name="codproducto" value="<?php echo $cod_producto; ?>">
				<input type="text" name="name" placeholder="Nombre" value="<?php echo $nombre_prod; ?>">
				<input type="text" name="precio" placeholder="Precio" value="">
				<input type="text" name="marca" placeholder="Marca" value="<?php echo $marca_prod; ?>">
				
				<!-- aqui va el select -->

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
				<button type="submit">Actualizar</button>

			</form>
		</div>
	</section>
</body>
</html>