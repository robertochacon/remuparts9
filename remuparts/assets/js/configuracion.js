$(document).ready(function(){

	$("#editar_email").click(function(event){
		event.preventDefault();

		var correo = $("#editarEmail").val();

		$.ajax({
			url: 'editarEmail',
			method: 'POST',
			data: {correo:correo},
			beforeSend:function(){
				console.log('guardando');
			},
			success:function(data){
				if (data == "1") {

					$.notify({
						title: '<strong>Bien!</strong>',
						message: 'Cambiaste el correo.'
					},{type: 'success'});	

				}else{

					$.notify({
						title: '<strong>Mal!</strong>',
						message: 'Error al cambiar correo.'
					},{type: 'danger'});	

				}//termina la condicion
			}

		});//termina el ajax
	});



$("#editar_clave").click(function(event){
		event.preventDefault();

		var clave1 = $("#clave1").val();
		var clave2 = $("#clave2").val();

		if (clave1 != clave2) {
			$.notify({
				title: '<strong>Mal!</strong>',
				message: 'Las contraseñas no coinsiden.'
			},{type: 'danger'});	
		}else{

			if (clave1 != "" || clave2 != "") {

				$.ajax({
					url: 'editarClave',
					method: 'POST',
					data: {clave:clave2},
					beforeSend:function(){
						console.log('guardando');
					},
					success:function(data){
						if (data) {

							$.notify({
								title: '<strong>Bien!</strong>',
								message: 'Cambiaste la clave.'
							},{type: 'success'});	

						}else{

							$.notify({
								title: '<strong>Mal!</strong>',
								message: 'Error al cambiar clave.'
							},{type: 'danger'});	

						}//termina la condicion
						console.log(data);
					}

				});//termina el ajax
			}else{
				$.notify({
					title: '<strong>Mal!</strong>',
					message: 'Rellene los campos.'
				},{type: 'danger'});
			}

		}

	});






});