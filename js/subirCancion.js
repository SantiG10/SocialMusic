function validar(){
	var U = document.f1.txtNombre.value;

	if(U == ""){
		alert("Campo nombre canción vacio")
	} else {
		document.f1.submit();
	}
}