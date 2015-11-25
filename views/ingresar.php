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
		<div class="container">
    		<div class="row">
        		<div class="span6 offset3">
            		<form class="form-horizontal" >
            			<div class="form-group">
					    	<label for="inputEmail3">Nombres</label>
					      	<input type="text" class="form-control" id="inputEmail3" placeholder="Nombres">	
					  	</div>
					  	<div class="form-group">
					    	<label for="inputEmail3">Apellidos</label>
					      	<input type="text" class="form-control" id="inputEmail3" placeholder="Apellidos">	
					  	</div>
					  	<div class="form-group">
					    	<label for="inputEmail3">Correo electrónico</label>
					      	<input type="email" class="form-control" id="inputEmail3" placeholder="Correo">	
					  	</div>
					  	<div class="form-group">
						  	<select class="form-control">
							  <option>Seleccionar una pregunta</option>
							  <option>¿Nombre primera mascota?</option>
							  <option>¿Colegio donde estudió?</option>
							  <option>¿Día de cumpleaños de tu madre?</option>
							</select>
						</div>
						<div class="form-group">
					      	<input type="text" class="form-control" id="inputEmail3" placeholder="Escribe la respuesta a la pregunta">	
					  	</div> 
					  <div class="form-group">
					  	<label for="inputPassword3">Contraseña</label>
					    <input type="password" class="form-control" id="inputPassword3" placeholder="Escribe una contraseña, mínimo 8 caracteres">
					  </div>
					  <div class="form-group">
					  	<label for="inputPassword3">Confirmación contraseña</label>
					    <input type="password" class="form-control" id="inputPassword3" placeholder="Repite tu contraseña, mínimo 8 caracteres">
					  </div>
					  <div class="form-group">
					    
					      <button type="submit" class="btn btn-success btn-block">Registrarse</button>

					  </div>
				</form>
        	</div>
    	</div>
	</div>
	    <script src="../script/iniciar_sesion.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script src="../js/vendor/jquery.min.js"></script>
    	<script src="../js/owl.carousel.min.js"></script>
    	<script src="../js/bootstrap.min.js"></script>
    	<script src="../js/plugins.js"></script>
    	<script src="../js/main.js"></script>
	</body>
</html>