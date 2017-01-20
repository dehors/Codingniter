<!Doctype html>
<html lang="es">
	<head>
		<title>CRUD Codingniter</title>
		<link rel="stylesheet" href="<?php echo base_url('public/bower_components/dist/css/bootstrap.min.css') ?>">
		<script src="<?php echo base_url('public/bower_components/dist/js/bootstrap.min.js') ?>"></script>
	</head>
	<body>
		<header>
			Cabeza
		</header>
		<div class="container">
			<!-- Aqui va el contenido de las vistas -->
			<?php 
				$this->load->view($contenido);
			 ?>
		</div>
		<footer>
			pie
		</footer>
	</body>
</html>