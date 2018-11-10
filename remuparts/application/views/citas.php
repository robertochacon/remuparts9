<?php $this->load->view('layout/header_out') ?>


<div class="container animated fadeIn">
	
<div class="card" style="margin:auto;margin-top:120px;">
<div class="card-body">
<h3 class="card-title">Solicitud de cita.</h3>

<form id="citas" method="post">

<div class="row">

	<div class="col-sm-12 col-md-6 col-lg-6 mt-10">
		<div class="card" style="margin:auto;">
		  <div class="card-body">
		    <h5 class="card-title">Infromacion personal</h5>
				  <div class="form-group">
				    <label for="nombre">Nombre</label>
				    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" placeholder="Escriba su nombre" required="">
				    <small id="nombre" class="form-text text-muted">Introdusca su nombre.</small>
				  </div>
				  <div class="form-group">
				    <label for="Apellido">Apellido</label>
				    <input type="text" class="form-control" id="Apellido" name="apellido" placeholder="Escriba su apellido" required="">
				    <small id="emailHelp" class="form-text text-muted">Introdusca su nombre.</small>
				  </div>
				  <div class="form-group">
				    <label for="Telefono">Telefono</label>
				    <input type="number" class="form-control" id="Telefono" name="telefono" placeholder="Escriba su telefono" required="">
				    <small id="emailHelp" class="form-text text-muted">Introdusca su telefono.</small>
				  </div>
				 
		  </div>
		</div>
	</div>

	<div class="col-sm-12 col-md-6 col-lg-6 mt-10">
		<div class="card" style="margin:auto;">
		  <div class="card-body">
		    <h5 class="card-title">Informacion del servicio.</h5>
				  <div class="form-group">
				    	<label for="Apellido">Servicios de mecanica en general</label>
						<select class="form-control form-control-lg" name="servicios" id="mantenimiento" required="">
						  <option value="MP">Mantenimiento preventivo</option>
						  <option value="CBF">Cambio de banda de freno</option>
						  <option value="CA">Cambio de aceites</option>
						  <option value="RM">Reparacion del motor</option>
						  <option value="RTD">Reparacion del tren delantero</option>
						</select>
				  </div>
				    <div class="form-check">
					    <input type="checkbox" class="form-check-input" id="checkbox" disabled="" required="">
					    <label class="form-check-label" for="checkbox">Deseas otro servicio</label>
					  </div>
				  <div class="form-group" id="otroServicioOculto">
				    <textarea class="form-control" id="otroServicio" name="otroServicio" rows="3" required="" disabled=""></textarea>
				  </div>
				  <div class="form-group">
				    <label for="fecha">Fecha</label>
				    <input type="date" class="form-control" id="fecha" name="fecha_cita" placeholder="Escriba su fecha" required="">
				    <small id="emailHelp" class="form-text text-muted">Introdusca una fecha.</small>
				  </div>
				  <div class="form-group">
				    <label for="hora">Hora</label>
				    <input type="time" min="08:00" max="17:30" value="08:00" class="form-control" id="hora" name="hora" placeholder="Escriba una hora" required="" pattern="[0-9]{2}:[0-9]{2}">
				    <small id="emailHelp" class="form-text text-muted">Introdusca su telefono.</small>
				  </div>
				   <button type="submit" class="btn btn-primary" style="width::100%;">Enviar informacion</button>
		  </div>
		</div>
	</div>

</div>

</form>

</div>
</div>
</div>





</div>
	<script src="<?php echo base_url('assets/js/citas.js');?>"></script>
</body>
</html>