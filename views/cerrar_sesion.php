<?php
	require("conexion.php");
	session_start();
	$cnx = conexion::conectar();
	$sql = "update usuarios set estado = 'OFF' where user = '".$_SESSION['usuario']."'";
	mysql_query($sql,$cnx);
	mysql_close($cnx);
	unset($_SESSION['usuario']);
	echo "	<script>
				alert('Exito salida de sesión');
				window.location.href='../index.php';
			</script>";
?>
