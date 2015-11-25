function validar(){
	var U = document.f1.txtUsuario.value;
	var C = document.f1.txtClave.value;

	if(U == "" || C == ""){
		alert("Faltan Datos..!");
	} else {
		document.f1.submit();
	}
}
