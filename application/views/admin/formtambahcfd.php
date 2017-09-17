
	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand"><a href="<?php echo base_url('admin/kelolacfd');?>">Kelola CFD </a> / Tambah </div>
						<!-- <div class="navbar-brand" >Material Dashboard / <a href=""> Hello</a> </div> -->
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">person</i>
									<?=$nama_admin?> <i class="material-icons right">arrow_drop_down</i>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="<?=base_url('admin/profil');?>">Profile</a></li>
									<li><a href="<?=base_url('panitia/logout');?>">Log Out</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" style="background-color:darkblue">
	                                <h4 class="title">Tambah Data CFD</h4>
	                                <p class="category">Lengkapi data CFD berikut ini.</p>
	                            </div>

	                        	<div class="col-md-12">
	                        	   	                                     <!-- map -->
	                        	    
										<style>
										         
										          #map {
										               width: 100%;
										               height: 600px;
										           
										          }
										</style>
										 
										<script type="text/javascript">
										 
										     //Mendefinisikan alamat icons yang akan digunakan
										    var customIcons = {
										      1: {
										        icon: 'assets/icons/fasion.png'
										      }
										    };
										 
										    function load() {
										      var map = new google.maps.Map(document.getElementById("map"), {
										        center: new google.maps.LatLng(-6.911717, 107.608060),
										        zoom: 12,
										        mapTypeId: 'hybrid'
										      });
										      var infoWindow = new google.maps.InfoWindow;
										 
										      // Bagian ini digunakan untuk mendapatkan data format XML yang dibentuk dalam datalokasimapsbdg.php
										      downloadUrl("<?php echo base_url(); ?>welcome/tampilXML", function(data) {
										        var xml = data.responseXML;
										        var markers = xml.documentElement.getElementsByTagName("marker");
										        for (var i = 0; i < markers.length; i++) {
										          var id = markers[i].getAttribute("id");
										          var name = markers[i].getAttribute("name");
										          var deskrip = markers[i].getAttribute("deskrip");
										          var point = new google.maps.LatLng(
										              parseFloat(markers[i].getAttribute("lat")),
										              parseFloat(markers[i].getAttribute("lng")));
										          var html = "<b>" + name + "</b><br/>" + deskrip + "<br/> <br/>"  + "<a href='<?php echo base_url(); ?>welcome/detailCFD/"+ id +"'>Detail</a>";
										          var icon = customIcons[1] || {};
										          var marker = new google.maps.Marker({
										            map: map,
										            position: point,
										            icon: icon.icon
										 
										          });
										          bindInfoWindow(marker, map, infoWindow, html);
										        }
										      });
										    }
										 
										    function bindInfoWindow(marker, map, infoWindow, html) {
										      google.maps.event.addListener(marker, 'click', function() {
										        infoWindow.setContent(html);
										        infoWindow.open(map, marker);
										      });
										    }
										 
										    function downloadUrl(url, callback) {
										      var request = window.ActiveXObject ?
										          new ActiveXObject('Microsoft.XMLHTTP') :
										          new XMLHttpRequest;
										 
										      request.onreadystatechange = function() {
										        if (request.readyState == 4) {
										          request.onreadystatechange = doNothing;
										          callback(request, request.status);
										        }
										      };
										 
										      request.open('GET', url, true);
										      request.send(null);
										    }
										 
										    function doNothing() {}
										 
										</script> 
										</head>
										 <body onLoad="load()"> 
										<center> 
										<div id="map"></div> 
										</center>
										<!-- akhir map -->
	                        		<form action="" method="POST">
	                        		<br>
	                        		 <font color="red"> <?php echo validation_errors();?> </font>

	                        		 <?php if($this->session->flashdata('peringatan')):?>
				                        <br><div class="alert alert-danger"> <a class="close" data-dismiss="alert" aria-label="close">×</a> <?php echo $this->session->flashdata('peringatan'); ?>  
				                        </div>
				                    <?php endif;?>
	                                    <div class="row">
	                                        <div class="col-md-8">
												<div class="form-group label-floating">
													<label class="control-label">ID CFD</label>
													<input type="text" class="form-control" name="idAdmin" value="<?php echo $kodeunik; ?>" readonly>
												</div>
	                                        </div>
	                                    </div>	                        		
	                                    <div class="row">
	                                        <div class="col-md-8">
												<div class="form-group label-floating">
													<label class="control-label">Tempat</label>
													<select class="form-control" name="namaCFD">
														<option value="Dago">Dago</option>
													</select>
												
												</div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-8">
												<div class="form-group label-floating">
													<label class="control-label">Deskripsi</label>
													<textarea class="form-control" rows="3">
														
													</textarea>
												</div>
	                                        </div>
	                                    </div>

	                                    <input type="submit" class="btn btn-primary pull-left" name="simpan" value="SIMPAN"></input>
	                                    <div class="clearfix"></div>
	                                </form>
	                        		
	                        	</div>
	                      
	                        </div>
	                    </div>
					</div>
				</div>
			</div>

			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="#">
									&copy; Team Developer CFD 2017
								</a>
							</li>
						</ul>
					</nav>
					<p class="copyright pull-right">
						Creative Team Web
					</p>
				</div>
			</footer>
		</div>
	</div>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBU4ozT2gwSNOibrQsc6zSCE9157kpFzyk&callback=initMap"type="text/javascript"></script>
