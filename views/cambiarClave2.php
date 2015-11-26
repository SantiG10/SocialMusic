<?php
    require("conexion.php");
    session_start();
		$U   = $_GET['usuario'];
		$C   = $_POST['txtClave'];
		$sql = "update usuarios set password = '".$C."' where user = '".$U."'";
		$cnx = conexion::conectar();
		mysql_query($sql,$cnx);
		echo"<script>
						alert('La contraseña se cambio correctamente');
						window.location.href='./ingresar.php';
				 </script>";
		mysql_close($cnx);
?>