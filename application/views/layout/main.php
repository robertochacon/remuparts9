<?php $this->load->view('layout/header_inside');?>

	<div class="col-md-12 grafica">

  		<table id="citas" class="table table-striped table-hover animated fadeIn" style="width:100%;">
  			<thead>
  				<th>ID</th>
  				<th>Nombre</th>
  				<th>Apellido</th>
          <th>Telefono</th>
  				<th>Servicio</th>
  				<th>Hora</th>
  				<th>Fecha Cita</th>
  				<th>Fecha</th>
  			</thead>
  			<tbody>
  				<?php foreach($citas as $cita){?>
  				<tr>
  					<td><?php echo $cita->id;?></td>
  					<td><?php echo $cita->nombre;?></td>
  					<td><?php echo $cita->apellido;?></td>
            <td><?php echo $cita->telefono;?></td>
  					<td><?php echo $cita->servicios;?></td>
  					<td><?php echo $cita->hora;?></td>
  					<td><?php echo $cita->fecha_cita;?></td>
  					<td><?php echo $cita->fecha;?></td>
  				</tr>
  				<?php }?>
  			</tbody>
  		</table>
		
    </div>



</div>

<script>

$(document).ready( function () {
    $('#citas').DataTable();
} );


	// $.ajax({
	// 	url: '<?php echo base_url('data/date.csv');?>',
	// 	dataType: "text",
	// 	contentType: "charset=utf-8",
	// }).done(grafica);

	// function grafica(data){
	// 	console.log(data);
	// 	var datos = data.split(/\r?\n|\r/);
	// 	console.log(datos);
	// 	var datosFilas = datos[2].split(';');
	// 	console.log(datosFilas);
	// }
</script>

</body>
</html>