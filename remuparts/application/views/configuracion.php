<?php $this->load->view('layout/header_inside');?>

	<div class="col-md-12 grafica">
  		
	  	
	<div class="row mb-3">
	<div class="col-sm-12 col-md-6 col-lg-6 mt-2">
		<div class="card" style="box-shadow: 1px 3px 3px gray;">
		  <div class="card-body">
			<form method="post">
			  <div class="form-group">
			    <label for="editarEmail">Email</label>
			    <input type="email" class="form-control" name="correo" id="editarEmail" aria-describedby="emailHelp" value="<?= $this->session->userdata('usuario');?>" placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">Puedes actualizar tu email en cualquier momento.</small>
			  </div>
			  <button type="submit" id="editar_email" class="btn btn-primary">Actualizar</button>
			</form>
		  </div>
		</div>
	</div>

	<div class="col-sm-12 col-md-6 col-lg-6 mt-2">
		<div class="card col-sm-12 col-md-12 col-lg-12" style="box-shadow: 1px 3px 3px gray;">
		  <div class="card-body">
			<form method="post">
<!-- 		  <div class="form-group">
			    <label for="contrasenaAntigua">Contraseña Actual</label>
			    <input type="password" class="form-control" id="contrasenaAntigua" placeholder="Password">
			  </div> -->
			  <div class="form-group">
			    <label for="clave1">Nueva Contraseña</label>
			    <input type="password" class="form-control" id="clave1" placeholder="Nueva contraseña">
			  </div>
			  <div class="form-group">
			    <label for="clave2">Repetir Nueva Contraseña</label>
			    <input type="password" class="form-control" id="clave2" name="clave" placeholder="Repetir nueva contraseña">
			  </div>
			  <button type="submit" id="editar_clave" class="btn btn-primary">Actulizar</button>
			</form>
		  </div>
		</div>
	</div>
	</div>



</div>

<script>

</script>

<script src="<?php echo base_url('assets/js/configuracion	.js');?>"></script>
</body>
</html>