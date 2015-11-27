<?php

require("conexion.php");
session_start();
$cnx = conexion::conectar();

if ($_POST["action"] == "upload") {


    //obtenemos los datos del archivo
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];
    $prefijo = substr(md5(uniqid(rand())),0,6);
    $nombre = $_POST['txtNombre'];
    $comentario = $_POST['txtComentario'];
    $usuario = $_SESSION['usuario'];
    $destino =  "../files/".$prefijo."_". str_replace(" ","",$nombre) .".mp3";
    $sql = "insert into musica (`usuario`, `nombre`, `direccion`, `estado`,
        `descripcion`)
        values('$usuario','$nombre','$destino','ON','$comentario')";  
    if ($archivo != "") {
        if ($_FILES['archivo']['size']>6000000){
                    echo "  <script>
                                alert('Tamaño demasiado grande');
                                window.location.href='./subirCancion.php';
                            </script>";
        }else if($_FILES['archivo']['type'] != "audio/mp3"){
                    echo "  <script>
                                alert('Archivo de formato no valido');
                                window.location.href='./subirCancion.php';
                            </script>";
        }else{
            if(copy($_FILES['archivo']['tmp_name'],$destino)) {
                    mysql_query($sql,$cnx);
                    echo "  <script>
                                alert('Canción subida con exito');
                                window.location.href='./inicioUsuario.php';
                            </script>";
                    mysql_close($cnx);                 
            } else {
                echo "  <script>
                            alert('Error al subir la canción');
                            window.location.href='./subirCanción.php';
                        </script>";
            }
        } 
    } else {
        echo "  <script>
            alert('Error al subir la canción');
            window.location.href='./subirCancion.php';
        </script>";
    }
}
?>