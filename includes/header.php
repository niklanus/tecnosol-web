<!DOCTYPE html>
<html lang="es">
<head>
	<!--
	WARNING
	WARNING
	WARNING
	WARNING
	WARNING
	WARNING
	WARNING
	-->
	<meta name="robots" content="noindex">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo($pageTitle) ?></title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link href="css/style.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<nav class="navbar js-navbar">
	<a href="index.php" class="navbar__logo"></a>
	<ul class="navbar__items">
		<ul class="navbar__item js-dropdown">
			<li>
				<a href="#">Nuestros servicios<i class="ti-angle-down"></i></a>
				<ul>
					<li><a href="it.php">Servicios de soporte IT</a></li>
					<li><a href="noc.php">NOC (Network Operation Center)</a></li>
					<li><a href="gestion.php">Gestión de Redes y Seguridad</a></li>
					<li><a href="web.php">Servicios y desarrollo web</a></li>
					<li><a href="equip.php">Provisión de equipamiento</a></li>
				</ul>
			</li>
			
		</ul>
		<li class="navbar__item">
			<a href="nosotros.php">Sobre nosotros</a>
		</li>
		<li class="navbar__item">
			<a href="contacto.php">Contacto</a>
		</li>
		<li class="navbar__item">
			<button class="navbar__trigger js-nav-trigger"></button>
		</li>
	</ul>
</nav>
<nav class="nav-mobile js-nav-mobile">
	<ul class="nav-mobile__items">
		<li class="nav-mobile__item">
			<a href="#">Nuestros servicios</a>
			<ul class="nav-mobile__items nav-mobile__items--submenu">
				<li class="nav-mobile__item nav-mobile__item--submenu">
					<a href="it.php">Servicios de soporte IT</a>
				</li>
				<li class="nav-mobile__item nav-mobile__item--submenu">
					<a href="noc.php">NOC (Network Operation Center)</a>
				</li>
				<li class="nav-mobile__item nav-mobile__item--submenu">
					<a href="gestion.php">Gestión de Redes y Seguridad</a>
				</li>
				<li class="nav-mobile__item nav-mobile__item--submenu">
					<a href="web.php">Servicios y desarrollo web</a>
				</li>
				<li class="nav-mobile__item nav-mobile__item--submenu">
					<a href="equip.php">Provisión de equipamiento</a>
				</li>
			</ul>
		</li>
		<li class="nav-mobile__item">
			<a href="nosotros.php">Sobre nosotros</a>
		</li>
		<li class="nav-mobile__item">
			<a href="contacto.php">Contacto</a>
		</li>
	</ul>
</nav>