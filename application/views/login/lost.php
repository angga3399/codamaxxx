<?php
  error_reporting(E_ALL^(E_NOTICE | E_WARNING));
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>/assets/img/apple-icon.png">
	<!-- <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Material Kit by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url();?>/assets/css/demo.css" rel="stylesheet" />

</head>
<nav class="navbar navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
	    	
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
				<li>
					<a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-facebook-square"></i>
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-instagram"></i>
					</a>
				</li>

	    	</ul>
	    </div>
	</div>
</nav>

<body class="index-page">
<br>
		<div class="section section-full-screen section-signup" style="background-image: url('<?php echo base_url();?>/assets/img/city.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="card card-signup">
							<form class="form" method="POST" action="<?php echo base_url();?>login/sendMail">
								<div class="header header-primary text-center">
									<h4>Lupa Password</h4>
								</div>
								<div class="content">
									<p align="center"><font color="red"><i><b><?php echo $pesan; ?></b></i></font></p>
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input type="email" name="to_email" class="form-control" placeholder="Email..." required />
									</div>
								</div>
								<div class="footer text-center">
									<input type="submit" class="btn btn-simple btn-primary btn-lg" value="Kirim">
									<br>
									<a href="<?php echo base_url()?>login/lupa_password"><font color="darkblue">Lupa Password?</font></a>
									<br>
									<br>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
</body>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url();?>/assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?php echo base_url();?>/assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="<?php echo base_url();?>/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="<?php echo base_url();?>/assets/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>
