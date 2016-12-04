<!DOCTYPE html>
<html lang="en">
	<head>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">
		<title>Menu Principal</title>
		<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="iconic.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="prefix-free.js"></script>
	</head>

<body>
	<div class="wrap">
	
	<nav>
		<ul class="menu">
			<li><a href="#"><span class="iconic home"></span> Menu Principal</a></li>
			<li><a href="#"><span class="iconic plus-alt"></span> Hoteles</a>
				<ul>
					<li><a href="Hotel/AgregarH.php">Agregar</a></li>
					<li><a href="Hotel/Pre_EditarH.php">Editar</a></li>
                    <li><a href="Hotel/index.php">Eliminar</a></li>
                    <li><a href="../hotel.php?action=show">Mostrar Todos</a></li>
				</ul>
			</li>
			<li><a href="#"><span class="iconic plus-alt"></span> Tours</a>
				<ul>
					<li><a href="Tour/AgregarT.php">Agregar</a></li>
					<li><a href="Tour/Pre_EditarT.php">Editar</a></li>
                    <li><a href="Tour/EliminarT.php">Eliminar</a></li>
                    <li><a href="../tour.php?action=show">Mostrar Todos</a></li>
				</ul>
			</li>
			<li><a href="#"><span class="iconic plus-alt"></span> Usuarios</a>
				<ul>
					<li><a href="Usuario/AgregarU.php">Agregar</a></li>
					<li><a href="Usuario/Pre_EditarU.php">Editar</a></li>
                    <li><a href="Usuario/EliminarU.php">Eliminar</a></li>
                    <li><a href="../usuario.php?action=show">Mostrar Todos</a></li>
				</ul>
			</li>
            <li><a href="../logout.php"><span class="iconic plus-alt"></span> Salir</a></li>
		</ul>
		<div class="clearfix"></div>
	</nav>
	</div>
</body>

</html>