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