<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GitHub Page - UTPL</title>
 
	<!-- Enlace de css bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="navbar">
		<?php include ('nav.php');?>
	</nav>
	<main role="main">
		<section class="jumbotron text-center">
			<div class="container">
				<h1>Información personal</h1>
				<p class="lead text-muted">Hola!, soy André Jaramillo, pero muchos me dicen únicamente andré o "andrew", resido en la ciudad de Guayaquil pero originalmente soy de la ciudad de Machala, tengo 28 años y curso la carrera de Ing. en Tecnologías de la Inf.</p>
				<p class="lead text-muted">Me considero un programador con una creciente experiencia, laboro en una empresa de índole financiera como desarrollador web, aunque actualmente me encuentro en un pequeño proyecto de marketing digital.</p>
				<p class="lead text-muted">Me considero autodidacta en muchos aspectos y al mismo tiempo en la aprendizaje colaborativo en donde cada uno aprenda algo nuevo de quien esté esté dispuesto a compartir su conocimiento.</p>
			</div>
		</section>
		<div class="container">
			<img src="img/personal.jpg" class="rounded mx-auto d-block" height="40%" width="45%">
		</div>
		<center>
			<p>&copy; UTPL - Desarrollo Web <?php echo date("Y");?></p>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</center>
	</main>
	

</body>