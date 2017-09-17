<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Car Free Day Bandung</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/material-kit.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/css/event.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />

</head>

<body class="index-page">
<!-- Navbar -->
<div id="utama">
<nav class="navbar navbar-info navbar-fixed-top ">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-info">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
	    	<a href="http://www.creative-tim.com">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Creative Tim Logo" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    CFD Bandung
	                </div>
				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="example-navbar-info">
			<ul class="nav navbar-nav navbar-right">
				<li>
		            <a href="#utama">
		               <i class="material-icons">home</i> Beranda
		            </a>
		        </li>
		        <li>
		            <a href="<?php echo base_url(); ?>#event">
		                <i class="material-icons">schedule</i>Jadwal
		            </a>
		        </li>
		        <li>
		            <a href="<?php echo base_url(); ?>panitia">
		                Panitia
		            </a>
		        </li>
		        		        
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
</div>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header">
		<?php include("map_utama.php") ;?>
	</div>
	
	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">

	            <div id="event">
	            <div class="title">
	                <h2>Kegiatan Mendatang</h2>
	                <h3>Car Free Day Bandung</h3>
	            </div>    
					<div class="row">
						<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
							<ul class="event-list">
							<?php 
  							foreach ($evn->result() as $e): ?>
								<li>
									
									<img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />
									<div class="info">
										<h4><b><?php echo $e->tgl;?></b></h4>
										<h2 class="title"><font color="black"><?php echo $e->namaEvent;?></font></h2>
										<p class="desc"><font color="black">Lokasi CFD : <?php echo $e->namaCFD;?></font></p>
									</div>
								</li>

								
							<?php endforeach?>	
							
							</ul>
						</div>
					</div>
 				</div>

 				

	        </div>
	    </div>
	</div>
    
    <footer class="footer">
	    <div class="container">
	        
	        <div class="copyright pull-right">
	            &copy; 2017, made with by Creative Tim for a better web.
	        </div>
	    </div>
	</footer>
</div>

<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-simple">Nice Button</button>
				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--  End Modal -->


</body>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?php echo base_url(); ?>assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="<?php echo base_url(); ?>assets/js/material-kit.js" type="text/javascript"></script>

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
