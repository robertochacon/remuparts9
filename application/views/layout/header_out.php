<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>home</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1,minimum-scale=1, maximum-scale=1 ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/estilos_out.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/animate-css/animate.css');?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/full-slider.css');?>"/>
	<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/scrollreveal.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-notify/bootstrap-notify.min.js');?>"></script>
</head>
<body class="" style="background: black;">


<header class="animated fadeIn">
	<div class="row" style="display: flex;justify-content: space-between;align-items: center;">
		<div class="col-sm-12 col-md-6 col-lg-6 ml-3">
			<div class="row header_responsive">
			<div class="col-sm-12 col-md-6 col-lg-6 text-center">
				<img src="<?php echo base_url('assets/img/logo.png');?>" class="logo" width="200px" height="70">
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<label for="btn_menu"><img src="<?php echo base_url('assets/img/menu.png');?>" class="btn_menu" width="50px" height="50"></label>
			</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-5 col-lg-5" style="font-family:;font-size:18px;">
			<input type="checkbox" id="btn_menu" class="input_menu" name="">
			<nav class="nav nav-pills flex-column flex-sm-row menu">
			  <a class="flex-sm-fill text-sm-center nav-link text-white" href="<?php echo base_url("home")?>">- INICIO -</a>
			  <a class="flex-sm-fill text-sm-center nav-link text-white" href="<?php echo base_url("citas")?>">- CITAS -</a>
			  <a class="flex-sm-fill text-sm-center nav-link text-white" href="<?php echo base_url("servicios")?>">- SERVICIOS -</a>
			  <a class="flex-sm-fill text-sm-center nav-link text-white" href="<?php echo base_url("nosotros")?>">- NOSOTROS -</a>
			</nav>
		</div>
	</div>
</header>