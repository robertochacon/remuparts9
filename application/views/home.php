<?php $this->load->view('layout/header_out') ?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> -->
    <?php foreach ($images as $img => $value) { //var_dump($images[0]);?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?=$img?>" class="<?= ($img == 0) ? 'active' : '' ?>"></li>
    <?php } ?>
  </ol>
  <div class="carousel-inner">
<!--     <div class="carousel-item active">
      <img class="d-block w-100" src="../assets/img/slider/4.jpg" alt="First slide">
    </div> -->
    <?php foreach ($images as $img => $value) {?>
    <div class="carousel-item <?= ($img == 0) ? 'active' : '' ?>" style="background-image: url('<?= base_url()?>assets/img/slider/<?=$value?>')">
      
        <div class="carousel-caption d-none d-md-block animated bounceInDown" style="background:rgba(0,0,0,.5);padding:10px;margin-bottom: 200px;border-radius: 10px;box-shadow:1px 2px 4px black;">
        	<div style="margin: auto;">
				<img src="<?php echo base_url('assets/img/logo.png');?>" class="logo" width="260px" height="100">
			</div>
		    <!-- <h1 class="" style="color: red;">Remuparts9</h1> -->
		    <!-- <h4>Nosotros te ayudamos, estamos para servirte.</h4> -->
		    <br><br><br><br>
		  </div>
    </div>
    <?php } ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<center>
	<br><br><br>
	<h1 class="headline text-white">Que ofrecemos?</h1>
</center>


<div class="row headline aling-center" style="margin: auto; margin-top:60px;color: white; background:;">
	<div class="col-sm-12 col-md-5 col-lg-5">
	<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-6">
		<div class="container img_sesion_1 text-center">
			<img src="<?php echo base_url('assets/img/home/informacion.jpg');?>" class="radio" width="150" style="border-radius:100%;border:2px solid white;">
			<h4 class="text-dark">Informacion</h4>
		</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 text-center">
		<div class="container img_sesion_1">
			<img src="<?php echo base_url('assets/img/home/servicio.jpg');?>" class="radio" width="150" style="border-radius:100%;border:2px solid white;">
			<h4 class="text-dark">Servicio</h4>
		</div>
		</div>
	</div>
	</div>
	<div class="col-sm-12 col-md-2 col-lg-2 text-center">
		<div class="container img_sesion_1">
			<img src="<?php echo base_url('assets/img/home/herramientas.jpg');?>" class="radio" width="150" style="border-radius:100%;border:2px solid white;">
			<h4 class="text-dark">Herramientas</h4>
		</div>
	</div>
	<div class="col-sm-12 col-md-5 col-lg-5">
	<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-6">
		<div class="container img_sesion_1 text-center">
			<img src="<?php echo base_url('assets/img/home/piezas.jpg');?>" class="radio" width="150" style="border-radius:100%;border:2px solid white;">
			<h4 class="text-dark">Piezas</h4>
		</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 text-center">
		<div class="container img_sesion_1">
			<img src="<?php echo base_url('assets/img/home/acesorios.jpg');?>" class="radio" width="150" style="border-radius:100%;border:2px solid white;">
			<h4 class="text-dark">Acesorios</h4>
		</div>
		</div>
	</div>
	</div>
</div>





<div class="row parallax headline" style="margin-top: 70px;padding:20px;box-sizing:border-box;">
	<div class="col-sm-12 col-md-1 col-lg-1 aling-center"></div>
	<div class="col-sm-12 col-md-6 col-lg-6 aling-center" style="/*background:rgba(0,0,0,.8);*/text-shadow: 1px 2px 2px black;">
		<div class="container text-white">
			<center>
				<br><br><h2>Somos uno de Los Mejores Servicios del Pais</h2><br>
				<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut.</h5>
			</center>
		</div>
	</div>
	<div class="col-sm-12 col-md-1 col-lg-1 aling-center"></div>
	<div class="col-sm-12 col-md-4 col-lg-4 aling-center">
		<div class="container">
			<img src="<?php echo base_url('assets/img/home/participantes.jpg');?>" width="100%">
		</div>
	</div>
</div>



<center>
	<br><br><br>
	<h1 class="headline text-white">Conoce Mas!</h1>
</center>


<div class="row headline" style="margin-top: 40px;margin-bottom:60px; padding:20px;box-sizing:border-box;">
	<div class="col-sm-12 col-md-4 col-lg-4 aling-center" style="margin-top:10px;">
		<div class="container img_sesion_2">
			<img src="<?php echo base_url('assets/img/home/cambio_aceite.jpg');?>" width="100%">
		</div>
	</div>
	<div class="col-sm-12 col-md-4 col-lg-4 aling-center" style="margin-top:10px;">
		<div class="container img_sesion_2">
			<img src="<?php echo base_url('assets/img/home/mantenimiento.jpg');?>" width="100%">
		</div>
	</div>
	<div class="col-sm-12 col-md-4 col-lg-4 aling-center" style="margin-top:10px;">
		<div class="container img_sesion_2">
			<img src="<?php echo base_url('assets/img/home/servicio_2.jpg');?>" width="100%">
		</div>
	</div>
</div>



<div class="row parallax2 headline" style="margin-top:50px;margin-bottom:50px;padding:20px;box-sizing:border-box;">

	<div class="col-sm-12 col-md-4 col-lg-4 aling-center">
		<div class="container img_sesion_2">
			<img src="<?php echo base_url('assets/img/home/servicio_2.jpg');?>" class="sombra" width="100%">
		</div>
	</div>

	<div class="col-sm-12 col-md-8 col-lg-8 aling-center" style="/*background:rgba(0,0,0,.8);*/text-shadow: 1px 2px 2px black;">
		<div class="container text-white">
			<center>
				<br><br><h3>Somos uno de Los Mejores Servicios del Pais</h3><br>
				<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut.</h5>
			</center>
		</div>
	</div>
		
</div>
</div>


<center>
	<br>
	<h1 class="headline text-white">Contactanos</h1>
	<br>
</center>

<footer class="headline">

	<div class="row">
		<div class="col-sm-12 col-md-1 col-lg-1 aling-center"></div>

		<div class="col-sm-12 col-md-6 col-lg-6 aling-center text-white">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.104274176836!2d-69.97243198548337!3d18.47893537527007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf8b68d5d71323%3A0x252f5f5ab313728e!2sREPUESTO+REMUPARTS+9!5e0!3m2!1ses!2sdo!4v1541268911190" width="100%" height="350" frameborder="0" style="border:0;border-radius:5px 5px; margin-bottom: 20px;" allowfullscreen></iframe>

			<center>
				<h4>D. Alfredo Pie de Anselmi
				C/ Luis Jorge Castaños 23. 4º-2ª
				Urbanización Las Cascajuelas
				28999 Valdecillas de Jarama, Madrid</h4>
			</center>
		</div>

		<div class="col-sm-12 col-md-1 col-lg-1 aling-center"></div>

		<div class="col-sm-12 col-md-4 col-lg-4 aling-center">
			<div class="container">
				<ul class="list-group redes">
				
				  <li class="list-group-item disabled text-center bg-danger text-white"><h3>Redes Sociales</h3></li>
	
				  <li class="list-group-item disabled"><a href="" style="display: flex;align-items: center;">
				  	<img src="<?php echo base_url('assets/img/social/f.png');?>" width="40" height="40"><span class="text-dark ml-3"><h5>Facebook</h5></span>
				  </a></li>

				  <li class="list-group-item disabled"><a href="" style="display: flex;align-items: center;">
				  	<img src="<?php echo base_url('assets/img/social/i.png');?>" width="40" height="40"><span class="text-dark ml-3"><h5>Instagram</h5></span>
				  </a></li>
					
				  <li class="list-group-item disabled"><a href="" style="display: flex;align-items: center;">
				  	<img src="<?php echo base_url('assets/img/social/w.png');?>" width="40" height="40"><span class="text-dark ml-3"><h5>Whatsapp</h5></span>
				  </a></li>

				  <li class="list-group-item disabled"><a href="" style="display: flex;align-items: center;">
				  	<img src="<?php echo base_url('assets/img/social/g.png');?>" width="40" height="40"><span class="text-dark ml-3"><h5>Remuparts9@gmail.com</h5></span>
				  </a></li>

				</ul>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12 aling-center" style="padding-top: 20px;padding-bottom:20px;margin-top:50px; background:#ca1d0e;color:white;">
			<center><h5>No Coppy/2018</h5></center>
		</div>

<!-- 		<div class="col-sm-12 col-md-6 col-lg-6 aling-center">
			<div class="container">
				
			<div class="card col-sm-12 col-md-12 col-lg-12" style="box-shadow: 1px 3px 3px gray;">
			<div class="card-body">				
				<form>
				  <div class="form-group">
				    <label for="nombre">Nombre</label>
				    <input type="text" class="form-control" id="nombre" placeholder="Nombre">
				  </div>
				  
				  <div class="form-group">
				    <label for="apellido">Apellido</label>
				    <input type="text" class="form-control" id="apellido" placeholder="Apellido">
				  </div>

				  <div class="form-group">
				    <label for="telefono">Telefono</label>
				    <input type="number" class="form-control" id="telefono" placeholder="Telefono">
				  </div>
				  
				  <div class="form-group">
				    <label for="correo">Correo</label>
				    <input type="email" class="form-control" id="correo" placeholder="name@example.com">
				  </div>

				  <div class="form-group">
				    <label for="mensaje">Deja tu mensaje</label>
				    <textarea class="form-control" id="mensaje" placeholder="Mensaje..." rows="3"></textarea>
				  </div>

				  <input type="submit" class="btn btn-success" name="" value="Enviar" style="width:100%;">

				</form>
			</div>
			</div>

			</div>
		</div>

		<div class="col-sm-12 col-md-1 col-lg-1 aling-center"></div>

		<div class="col-sm-12 col-md-4 col-lg-4 aling-center">
			<div class="container">
				<ul class="list-group">
				
				  <li class="list-group-item disabled text-center bg-danger text-white"><h3>Redes Sociales</h3></li>
	
				  <li class="list-group-item disabled"><a href="" style="display: flex;align-items: center;">
				  	<img src="<?php echo base_url('assets/img/social/f.png');?>" width="40" height="40"><span class="text-dark ml-3"><h5>Facebook</h5></span>
				  </a></li>

				  <li class="list-group-item disabled"><a href="" style="display: flex;align-items: center;">
				  	<img src="<?php echo base_url('assets/img/social/i.png');?>" width="40" height="40"><span class="text-dark ml-3"><h5>Instagram</h5></span>
				  </a></li>
					
				  <li class="list-group-item disabled"><a href="" style="display: flex;align-items: center;">
				  	<img src="<?php echo base_url('assets/img/social/w.png');?>" width="40" height="40"><span class="text-dark ml-3"><h5>Whatsapp</h5></span>
				  </a></li>

				  <li class="list-group-item disabled"><a href="" style="display: flex;align-items: center;">
				  	<img src="<?php echo base_url('assets/img/social/g.png');?>" width="40" height="40"><span class="text-dark ml-3"><h5>Remuparts9@gmail.com</h5></span>
				  </a></li>

				</ul>
			</div>
		</div> -->

	</div>
</footer>

<br><br>
</div>


<script>
	ScrollReveal().reveal('.headline',{duration:1000});
</script>

<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '12116c66-8e0b-4bed-a9dc-e2fcd5254bdc', f: true }); done = true; } }; })();</script>

</body>
</html>