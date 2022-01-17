$('#form_insert').on('submit', function(event){
	event.preventDefault();
	$.ajax({
		url:'FPHP/creacion_horario.php',
		type: 'POST',
		dataType: 'HTML',
		data: $(this).serialize(),
	})
	.done(function(echo){
		//Cuando recibamos respuesta, la mostramos
		mensaje.html(echo);
		mensaje.slideDown(500);
	});
	//.done(function(respuesta){
		//console.log(respuesta);
	//	if(!respuesta.error){
	//		alert('los datos se ingresaron con exito!');
	//	}else{
	//		alert('los datos NO se ingresaron con exito!');
	//	}
	//})
	//.fail(function(resp){
	//	console.log("resp.responseText");
	//})
	//	.always(function(){
	//	console.log("complete");
	//})
});


