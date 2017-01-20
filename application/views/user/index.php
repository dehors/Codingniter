<!-- Aqui estara el CRUD de usuario -->
<h1>CRUD con codeigniter 3</h1>
<div>
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Lista</a></li>
		<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registro</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="home">
			<table class="table">
				<thead>
					<th>Perfil</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Correo</th>
					<th>Acciones</th>
				</thead>
				<tbody>
					<?php foreach ($Listusers as $value) {?>
					<tr>
						<td><?php echo $value->usu_id; ?></td>
						<td><?php echo $value->per_nombre; ?></td>
						<td><?php echo $value->usu_nombres; ?></td>
						<td><?php echo $value->usu_apellidos; ?></td>
						<td><?php echo $value->usu_correo; ?></td>
						<td><a href="<?php echo base_url('user/destroy/').$value->usu_id; ?>" title="Eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</a> <a href="<?php echo base_url('user/edit/').$value->usu_id; ?>" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div role="tabpanel" class="tab-pane" id="profile">
			<div class="row">
				<div class="col-md-7">
					<form method="POST" action="<?php echo base_url('user/store'); ?>">
						<div class="form-group">
							<label for="exampleInputEmail1">Perfil</label>
							<select name="txtIdper" id="" class="form-control">
								<?php foreach ($selperfil as $value) { ?>
								<option value="<?php echo $value->per_id ?>"><?php echo $value->per_nombre; ?></option>  
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Nombre</label>
							<input type="text" name="txtNombres" class="form-control" id="exampleInputEmail1" placeholder="Nombres">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Apellidos</label>
							<input type="text" name="txtApellidos" class="form-control" id="exampleInputEmail1" placeholder="Apellidos">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Correo</label>
							<input type="email" name="txtCorreo" class="form-control" id="exampleInputEmail1" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Telefono</label>
							<input type="text" name="txtTelefono" class="form-control" id="exampleInputEmail1" placeholder="Telefono">
						</div>
						<button type="submit" class="btn btn-default">Resgitrar usuario</button>
					</form>					
				</div>
				<div class="col-md-5">

				</div>
			</div>
		</div>
	</div>
</div>