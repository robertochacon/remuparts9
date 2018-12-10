// $("#checkbox").change(function(){
	// alert("good")
	// $("#otroServicio").css("background-color", "yellow");
// })

// $("#citas").submit(function(e){
// 	e.preventDefault();
// 		alert('hi');
// 		console.log('bien');
// });


$( "#citas" ).submit(function( event ) {

  $.ajax({
  	url: 'home/guardar_cita',
  	method: 'post',
  	data: $("#citas").serialize(),
  	beforeSend:function(){
  		console.log('guardando.....');
  	},
  	success:function(data){


		console.log('guardado');
		$.notify({
			title: '<strong>Bien!</strong>',
			message: 'Cita realizada correctamente.'
		},{type: 'success'});

  	// 	if (data == true) {
  	// 		console.log('guardado');
  	// 		$.notify({
			// 	title: '<strong>Bien!</strong>',
			// 	message: 'Cita realizada correctamente.'
			// },{type: 'success'});
  	// 	}else{
  	// 		console.log('Fallo');
			// $.notify({
			// 	title: '<strong>Mal!</strong>',
			// 	message: 'Error al solicitar cita.'
			// },{type: 'danger'});
  	// 	}
  	}
  });

  event.preventDefault();
});


