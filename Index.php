<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> OPTIPARK </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- jQuery primero -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- DataTables -->
	<script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
	<script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://hcaptcha.com/1/api.js" async defer></script>
	
<body>
	<header>
		<?php 
			$pg = isset($_REQUEST['pg']) ? $_REQUEST['pg']:NULL;
			date_default_timezone_set('America/Bogota');
			include("models/conexion.php");
			include("controllers/funcglobal.php"); 
			include("views/head.php"); 
		?>
		<nav>
			<?php include("views/vmenu.php"); ?>
		</nav>
	</header>
	<section>
		<?php
			if(!$pg OR $pg==1001)
				include("views/home.php");
			elseif($pg==1002)
				include("views/reserv.php");
			elseif($pg==1003)
				include("views/misrev.php");
			elseif($pg==1009)
				include("views/about.php");
			elseif($pg==1005)
				include("views/precios.php");
			else
				echo "<h2>404 - Pagina no existe.</h2>"
		?>
	</section>
	<footer>
		<?php include("views/footer.php"); ?>
	</footer>
</body>
<script src="/OptiParkArreglo/js/code.js"></script>
<script src="/OptiParkArreglo/js/reserv.js"></script>
</html>