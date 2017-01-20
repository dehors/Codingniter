<form method="POST" action="<?php echo base_url('user/update'); ?>">
	<input type="hidden" name="txtid" value="<?php echo $registro[0]->usu_id ?>">
	<div class="form-group">
		<label for="exampleInputEmail1">Perfil</label>
		<?php 
		$lista = array();
		foreach ($selperfil as $perfiles) { 
			$lista[$perfiles->per_id] = $perfiles->per_nombre;
		}
		echo form_dropdown('txtPerid',$lista,$registro[0]->per_id, 'clsss="form-control"');
		?>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Nombre</label>
		<input type="text" name="txtNombres" class="form-control" id="exampleInputEmail1" placeholder="Nombres" value="<?php echo $registro[0]->usu_nombres ?>">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Apellidos</label>
		<input type="text" name="txtApellidos" class="form-control" id="exampleInputEmail1" placeholder="Apellidos" value="<?php echo $registro[0]->usu_apellidos ?>">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Correo</label>
		<input type="email" name="txtCorreo" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php echo $registro[0]->usu_correo ?>">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Telefono</label>
		<input type="text" name="txtTelefono" class="form-control" id="exampleInputEmail1" placeholder="Telefono" value="<?php echo $registro[0]->usu_telefono ?>">
	</div>
	<button type="submit" class="btn btn-default">Actualizar usuario</button>
</form>