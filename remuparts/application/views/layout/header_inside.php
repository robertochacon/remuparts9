<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $this->session->userdata('usuario');?></title>
	<!-- <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1,minimum-scale=1, maximum-scale=1 "> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/estilos.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/jquery-datatable/datatable.css');?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/animate-css/animate.css');?>"/>
	<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/Chart.bundle.js');?>"></script>
	<script src="<?php echo base_url('assets/js/utils.js');?>"></script>
	<script src="<?php echo base_url('assets/js/grafica.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-datatable/datatable.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-notify/bootstrap-notify.min.js');?>"></script>
</head>
<body class="bg-light">
<header class="animated fadeIn">
	<div>
		<img src="<?php echo base_url('assets/img/user.png');?>" width="60">
		<h4 class="text-white">Bienvenid@, <?php echo $this->session->userdata('usuario');?></h4>
		<a class="btn btn-danger" href="<?php echo base_url() ?>home/salir">Salir</a>
	</div>
</header>

<div class="container">


	<div class="container text-center" style="margin:20px;">
		<div class="row">
			<div class="col-md-6 align-center">
        <a href="<?php echo base_url() ?>dentro" class="btn btn-success">Citas</a>
        <!-- <a href="<?php //echo base_url() ?>home/citas" class="btn btn-success">Citas</a> -->
        <a href="<?php echo base_url() ?>slider" class="btn btn-success">Slider</a>
        <a href="https://www.purechat.com/logout?logout=true" target="_blank" class="btn btn-success">Chat</a>
        <a href="<?php echo base_url() ?>configuracion" class="btn btn-success">Configuracion</a>
			</div>
		</div>
	</div>