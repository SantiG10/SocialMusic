function validar() {
	var Nombre    = document.f1.txtNombre.value;
	var Apellidos = document.f1.txtApellidos.value;
	var Pregunta 	= document.f1.pregunta.value;
	var Respuesta 	= document.f1.txtRespuesta.value;
	var Email 		= document.f1.txtEmail.value;
	var Clave 		= document.f1.txtClave.value;
	var Clave2 		= document.f1.txtClave2.value;

	if(Nombre == "" || Apellidos == "" ||  Email == "" || Clave == "" || Clave2 == "" || Respuesta ==""){
		alert("Faltan Datos..!");
	} else if(Clave != Clave2) {
		alert("Contraseñas Diferentes..!");
	} else if(Clave.length < 8 || Clave2.length < 8) {
		alert("Contraseña Mínima de 8 Caracteres");
	} else if(Pregunta == 99){
		alert("seleccione una pregunta");
	}else if(!(Email.indexOf("@") > -1  && Email.indexOf(".co") > -1)){
		alert("Correo no valido");
	}else {
		document.f1.submit();
	}
}
