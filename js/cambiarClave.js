function validar(){
	var C1 = document.f1.txtClave.value;
	var C2 = document.f1.txtClave2.value;

	if(C1 == ""){
		alert("Campo Nueva contraseña vacío");
	} else if(C2 == ""){
		alert("Campo comfirmar contraseña vacío");
	} else if (C1 != C2){
		alert("Contraseñas diferentes")
	}else if(C1.length < 8 || C2.length < 8) {
		alert("Contraseña Mínima de 8 Caracteres");
	}else {
		document.f1.submit();
	}
}