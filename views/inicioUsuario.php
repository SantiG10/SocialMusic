<?php 
	require("conexion.php");
	session_start();
	$usuario = $_SESSION['usuario'];
	$cnx  = conexion::conectar();
	$sql = "select nombre, direccion, descripcion from musica where usuario = '".$usuario."' and estado = 'ON'";
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
		<div class="container">
			<div class="center-block">
				<div class="span6 offset3">
				<?php		
					$r   = mysql_query($sql,$cnx);
					$nf  = mysql_num_rows($r);
					if($nf > 0) { 
				?>
				<div class="jumbotron" style="margin: 50px 0px 40px 0px; padding-bottom: 150px;">
					<div class="table-responsive">
						<table class="table">
							<tr class="success">
								<th>Nombre</th>
								<th>Canción</th>
								<th>Comentarios</th>
								<th>Eliminar</th>
							</tr>	
				<?php
						$opc = "info";
						while($fila = mysql_fetch_assoc($r)){
							if($opc == "info"){
								$opc = "active";
							}else{
								$opc = "info";
							}
				?>
							
								<tr class='<?php echo $opc ?>'>
									<td>
										<?php echo $fila['nombre']; ?>
									</td>
									<td>
										<audio controls>
											<source src=<?php echo $fila['direccion']; ?> type="audio/mp3" />
										</audio>
									</td>
									<td>
										<?php echo $fila['descripcion']; ?>
									</td>
									<td align="center">
										<img class="elim" src="../img/eliminar.png" width="40" height="40" BORDER=2 VSPACE=3 HSPACE=3 ALT="eliminar" value=<?php echo "'".$fila['direccion']."'" ?>>
									</td>
								</tr>
				<?php
						}
				?>
						</table>
					</div>
				</div>
				<?php } else { ?>
					<div class="jumbotron" style="margin: 40px 0px 60px 0px;">
						<div class="container">
							<h1> Hola, bienvenido a SocialMusic </h1>
							<p> Este es tu inicio, acá podrás escuchas tus canciones</p>
							<p> En el momento no tienes canciones disponibles </p>
							<p>
								<a class="btn btn-primary btn-lg" href="http://localhost:8888/SocialMusic/views/subirCancion.php" role="button">Agrega una canción »</a>
							</p>
						</div>
					</div>
				<?php } mysql_close($cnx); ?> 
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
	<script >
			$(document).ready(function(){
				$(".elim").click(function(){
					if(confirm("¿Esta seguro de eliminar esta canción?")){
						var dir = "./eliminarCancion.php?d=" + $(this).attr('value');
						window.location.href=dir;
					}
				});
			});
	</script>
	 <!-- <script src="../js/bootstrap3_player.js"></script> -->
	</body>
</html>