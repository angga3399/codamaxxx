<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>/assets/img/apple-icon.png">
	<!-- <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>CFD Bandung</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets/css/material-kit.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>/assets/css/jquery.dataTables.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/dataTables.bootstrap.min.css" />
  
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url();?>/assets/css/demo.css" rel="stylesheet" />

	
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>/assets/panitia/css/demo.css" rel="stylesheet" />
</head>
<nav class="navbar navbar-fixed-top">
	<div class="container">
	    <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="http://www.creative-tim.com">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="<?php echo base_url();?>/assets/img/logo.png" alt="Creative Tim Logo" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    CAR FREE DAY KOTA BANDUNG
	                </div>
				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
				<?php
    				if (empty($_SESSION['login_panitia'])) {
				?>
				<li>
					<a href="<?php echo base_url();?>">
						<i class="material-icons">home</i> Beranda
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>#event">
						<i class="material-icons">schedule</i> Jadwal
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>login">
						<i class="fa fa-sign-in"></i> Log In
					</a>
				</li>
				<?php
				}else{
				?>
				<li>
					<a href="<?php echo base_url();?>panitia/home">
						<i class="material-icons">home</i> Home
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>panitia/daftar">
						<i class="material-icons">add</i> Event
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>panitia/pengaturan">
						<i class="fa fa-cog"></i> Pengaturan
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>panitia/logout">
						<i class="fa fa-sign-out"></i> Log Out
					</a>
				<?php	
				}
				?>

	    	</ul>
	    </div>
	</div>
</nav>

<body class="index-page">