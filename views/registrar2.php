<?php
	require("conexion.php");

	$nom = $_POST['txtNombre'];
	$ape = $_POST['txtApellidos'];
	$pre = $_POST['pregunta'];
	$res = $_POST['txtRespuesta'];
	$tel = $_POST['txtTelefono'];
	$ema = $_POST['txtEmail'];
	$cla = $_POST['txtClave'];

	$cnx = conexion::conectar();

	$q = "insert into `usuarios` (`user`, `nombre`, `apellido`, `password`,
		`pregunta`, `respuesta`, `estado`)
		values('$ema','$nom','$ape','$cla','$pre','$res','OFF')";
	$sql = "Select user from usuarios where user='".$ema."'";
	$rt = mysql_query($sql, $cnx);
	if(mysql_num_rows($rt) > 0) {
		echo "	<script>
					alert('Este usuario ya existe');
					window.location.href='./registrar.php';
				</script>";
		mysql_close($cnx);
	} else {
		mysql_query($q,$cnx);
		echo "<script>alert('El usuario ha sido creado');
		window.location.href='./ingresar.php';
		</script>";
		mysql_close($cnx);
	}
?>