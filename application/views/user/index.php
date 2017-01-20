<!-- Aqui estara el CRUD de usuario -->
<h1>Formulario de registro</h1>

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