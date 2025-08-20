<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menú </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<?php include("menu/menu.php"); ?>

	<section style="margin-left: 260px; padding: 20px;">
        <section id="mainContent" class="contenido">
	<?php
		$pg = isset($_GET['pg']) ? $_GET['pg'] : null;

		if ($pg == 1010)
			include("views/dashboard.php");
        elseif ($pg == 1011)
			include("views/datatable.php");
		elseif ($pg == 1012)
			include("views/parqueaderos.php");
		elseif ($pg == 1013)
			include("views/clientes.php");
		elseif ($pg == 1014)
			include("views/pagos.php");
		elseif ($pg == 1015)
			include("views/config.php");
		elseif ($pg == 1016)
			include("views/ureportes.php");
		else
			echo "<h2>404 - Página no existente..</p>";
	?>
	</section>
</body>
</html>