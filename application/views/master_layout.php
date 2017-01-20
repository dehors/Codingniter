<!Doctype html>
<html lang="es">
	<head>
		<title>CRUD Codingniter</title>
		<link rel="stylesheet" href="<?php echo base_url('public/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
		<script src="<?php echo base_url('public/bower_components/jquery/dist/jquery.min.js') ?>"></script>
		<script src="<?php echo base_url('public/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
	</head>
	<body>
		<header>
			Cabeza
		</header>
		<div class="container">
			<!-- Aqui va el contenido de las vistas -->
			<div class="col-md-8">
				<?php 
					$this->load->view($contenido);
				 ?>
			</div>
		</div>
		<footer>
			pie
		</footer>
	</body>
</html>