function ajaxGenerico(datos){
	var respuesta;
	$.ajax({
		type : "POST",
		url : datos.url,
		data : {
			datos : datos.variables
		},
		dataType:"json",
		async:false,
		beforeSend : function() {
		},complete: function(data){
			respuesta = data;
		}
	});
	return respuesta.responseJSON;
}
function animar(elemento) {
	$('html, body').animate({
		scrollTop: $(elemento).offset().top
	}, 1500);
}