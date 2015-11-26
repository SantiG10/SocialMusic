<?php
    require("conexion.php");
    session_start();
		$U   = $_POST['txtUsuario'];
		$C   = $_POST['txtClave'];
		$q   = "select * from usuarios where user='".$U."' and password='".$C."'";
		$sql = "update usuarios set estado = 'ON' where user = '".$U."'";
		$cnx = conexion::conectar();
		$r   = mysql_query($q,$cnx);
		$nf  = mysql_num_rows($r);
		if($nf > 0) {
			$_SESSION['usuario'] = $U;
			mysql_query($sql,$cnx);
			echo"<script>
						window.location.href='./inicioUsuario.php';
				 </script>";
		} else {
			echo "<script>
						alert('Usuario o contraseña incorrecta');
						window.location.href='./ingresar.php';
					</script>";
		}
		mysql_close($cnx);
?>