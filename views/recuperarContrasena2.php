<?php
    require("conexion.php");
    session_start();
		$U   = $_POST['txtUsuario'];
		$P   = $_POST['pregunta'];
		$R   = $_POST['txtRespuesta'];
		$q   = "select * from usuarios where user ='".$U."' and pregunta = '".$P."' and respuesta = '".$R."'";
		$cnx = conexion::conectar();
		$r   = mysql_query($q,$cnx);
		$nf  = mysql_num_rows($r);
		if($nf > 0) {
			echo"<script>
						window.location.href='./cambiarClave.php?usuario=".$U."';
					</script>";
		} else {
			echo "<script>
						alert('Datos incorrectos');
						window.location.href='./recuperarContrasena.php';
					</script>";
		}
		mysql_close($cnx);
?>