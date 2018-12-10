<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/estilos.css');?>">
	<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/onmousemove.js');?>"></script>
</head>
<body class="wallpaper">
<div class="container">
	<div class="row">
<!--  -->

		<div class="col-md-4  formulario-login" style="">
			<center>
				<h1>Citas <span class="text-danger">Remuparts9</span></h1>
				<br>
				<img src="<?php echo base_url('assets/img/user.jpg');?>" width="100">
				<br>
			</center>
			<form action="<?php echo base_url()?>index.php/home/login" id="form-login" method="post" class="form-horizontal">
			  <div class="form-group">
			    <label for="usuario">Usuario</label>
			    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Escriba su usuario">
			  </div>
			  <div class="form-group">
			    <label for="clave">Clave</label>
			    <input type="password" class="form-control" name="clave" id="clave" placeholder="Escriba su clave">
			  </div>
			  <button type="submit" class="btn btn-danger form-control">Iniciar</button>
			  <br><br>
			</form>
			
			<center>
				<h3 class="text-danger"><?php echo $this->session->flashdata("error");?></h3>
			</center>
			<br>
		
		<script>
			$(function(){
			
			// $('#form-login').submit(function(e){
		  //  			 e.preventDefault();
		  
		  //  			 var usuario = $('#usuario').val();
		  //  			 var clave = $('#clave').val();
		
			// 		$.ajax({
			// 			url:'<?php echo base_url()?>index.php/home/login',
			// 			type:'ajax',
			// 			method:'post',
			// 			dataType:'json',
			// 			data:{usuario:usuario,clave:clave},
			// 			success:function(data){
							
			// 			},
			// 			error:function(data){
			// 				alert('bad 2');
			// 			}
			// 		});
		
			// 		return false;
		
			// });
		});
		</script>
		
		
		</div>
	</div>
</div>
</body>
</html>