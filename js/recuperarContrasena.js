function validar(){
	var U = document.f1.txtUsuario.value;
	var P = document.f1.pregunta.value;
	var R = document.f1.txtRespuesta.value;

	if(U == ""){
		alert("Campo correo vacio")
	}else if(!(U.indexOf("@") > -1  && U.indexOf(".co") > -1)){
		alert("Correo no valido");
	}else if(P == 99){
		alert("Seleccione una pregunta");
	}else if(R == ""){
		alert("Campo respuesta vacio");
	} else {
		document.f1.submit();
	}
}