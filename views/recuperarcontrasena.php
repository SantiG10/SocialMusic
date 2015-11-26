<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Registrar Usuario</title>
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,700,600,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' rel='stylesheet' type='text/css'>

	    <link rel="stylesheet" href="../css/slicknav.css">
	    <link rel="stylesheet" href="../css/owl.carousel.css">
	    <link rel="stylesheet" href="../css/font-awesome.min.css">
	    <link rel="stylesheet" href="../css/bootstrap.min.css">
	    <link rel="stylesheet" href="../css/main.css">
	    <link rel="stylesheet" href="../css/responsive.css">
	    <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<?php include "./encabezado.php"; ?>
		<div class="container">
    		<div class="row">
        		<div class="span6 offset3">
            		<form class="form-horizontal form-ingresar" name="f1" action="./recuperarContrasena2.php" method="post">
            		<div class="form-gruop">
            			<label><h2>Recuperar contraseña</h2></label>
            		</div>
					  	<div class="form-group">
					    	<label for="inputEmail3">Correo electrónico</label>
					      	<input type="email" name="txtUsuario"class="form-control" id="inputEmail3" placeholder="Correo">	
					  	</div>
					  	<div class="form-group">
					  		<label for="inputEmail3">Pregunta</label>
						  	<select class="form-control" name="pregunta">
							  	<option value="99">Selecionar una pregunta</option>
								<option value="1">¿Nombre primer mascota?</option>
								<option value="2">¿Colegio donde estudio?</option>
								<option value="3">¿Dia del cumpleaños de tu madre?</option>
							</select>
						</div>
						<div class="form-group">
							<label for="inputEmail3" >Respuesta</label>
					      	<input type="text" name="txtRespuesta" class="form-control" id="inputEmail3" placeholder="Escribe la respuesta a la pregunta">	
					  	</div> 
					  <div class="form-group">
					      <!-- <button type="submit" class="btn btn-success btn-block">Inciar sesión</button> -->
					      <input type="button" value="Recuperar" onclick="validar()"/ class="btn btn-success btn-block" >
					  </div>
				</form>
        	</div>
    	</div>
	</div>
	<?php include './footer.php'; ?>
	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/recuperarContrasena.js"></script>
<script src="../js/vendor/jquery.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/main.js"></script>
	</body>
</html>