function validar(){
	var U = document.f1.txtUsuario.value;
	var C = document.f1.txtClave.value;

	console.log("jfjdsjasd" + U);

	if(U == "") {
		alert("Campo correo vacio");
	} else if(!(U.indexOf("@") > -1  && U.indexOf(".co") > -1)){
		alert("Correo no valido");
	} else if (C == "") {
		alert("Campo contraseña vacia");
	} else {
		document.f1.submit();
	}
}