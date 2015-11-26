<?php 
	require("conexion.php");
	session_start();
	$usuario = $_SESSION['usuario'];
	$cnx  = conexion::conectar();
	$sql = "select direccion from musica where usuario = '".$usuario."' and estado = 'ON'";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Inicio</title>
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,700,600,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' rel='stylesheet' type='text/css'>
		<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">     -->

		  <!-- <link href="../css/bootstrap3_player.css" rel="stylesheet"> -->
	    <link rel="stylesheet" href="../css/slicknav.css">
	    <link rel="stylesheet" href="../css/owl.carousel.css">
	    <link rel="stylesheet" href="../css/font-awesome.min.css">
	    <link rel="stylesheet" href="../css/bootstrap.min.css">
	    <link rel="stylesheet" href="../css/main.css">
	    <link rel="stylesheet" href="../css/responsive.css">
	    <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
	<?php include "../views/encabezado.php"; ?>
		<div class="container inicioUsuario">
			<div class="center-block ">
				<div class="span6 offset3">
					<div class="centrado2">
						<h1>Inicio Usuario</h1>
					</div>

					<div class="centrado2">
						<audio controls>
							<source src="../files/60aa44_loveMe.mp3" type="audio/mp3" />
						</audio>
					</div>	
				</div>
			</div>
		</div>			
	<?php include './footer.php'; ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
	<script src="../js/vendor/jquery.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
	 <!-- <script src="../js/bootstrap3_player.js"></script> -->
	</body>
</html>