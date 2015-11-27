<?php 
	require("conexion.php");
	session_start();
	$cnx = conexion::conectar();
	$dir = $_GET['d'];

	$sql = "update musica set estado = 'OFF' where direccion='".$dir."'";
	mysql_query($sql,$cnx);
	echo 	"<script>
	            alert('Cancion borrada exitosamente');
	            window.location.href='./inicioUsuario.php';
        	</script>";
	mysql_close($cnx);

?>