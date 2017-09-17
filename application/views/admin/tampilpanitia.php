
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
						<div class="navbar-brand"><a href="<?php echo base_url('admin/kelolapanitia');?>">Kelola Panitia </a> / Tambah </div>
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
		                        <div class="col-md-8">
		                        <div class="card">
		                            <div class="card-header" style="background-color:darkblue">
		                                <h4 class="title">Data Panitia</h4>
										<p class="category">Data Lengkap panitia </p>
		                            </div>
		                            <div class="card-content">
		                                <form>
		                                	  <div class="form-group">
										              <label class="col-sm-4 text-right" style="margin-top:1.5%;"> Admin Penanggungjawab:</label>
										              <div class="col-sm-8">
										              	 <input type="text" class="form-control" name="idAdmin" value="<?php echo $panitia->namaAdmin;?>"  disabled>
										              </div> <br><br>
										      </div>  
		                                     <div class="form-group">
										              <label class="col-sm-4 text-right" style="margin-top:1.5%;"> No KTP :</label>
										              <div class="col-sm-8">
										              	 <input type="text" class="form-control" name="idAdmin" value="<?php echo $panitia->noKtp;?>"  disabled>
										              </div> <br><br>
										      </div>  
		                                      <div class="form-group">
										              <label class="col-sm-4 text-right" style="margin-top:1.5%;"> Nama :</label>
										              <div class="col-sm-8">
										               	<input type="text" class="form-control" name="idAdmin" value="<?php echo $panitia->namaPanitia;?>"  disabled>
										              </div> <br><br>
										      </div>  
		                                      <div class="form-group">
										              <label class="col-sm-4 text-right" style="margin-top:1.5%;"> Tanggal Lahir :</label>
										              <div class="col-sm-8">
										               	<input type="text" class="form-control" name="idAdmin" value="<?php echo $panitia->tgl;?>"  disabled>
										              </div> <br><br>
										      </div>  
										      <div class="form-group">
										              <label class="col-sm-4 text-right" style="margin-top:1.5%;"> Kontak :</label>
										              <div class="col-sm-8">
										               	<input type="text" class="form-control" name="idAdmin" value="<?php echo $panitia->kontak;?>"  disabled>
										              </div> <br><br>
										      </div>
										      <div class="form-group">
										              <label class="col-sm-4 text-right" style="margin-top:1.5%;"> Email :</label>
										              <div class="col-sm-8">
										               	<input type="text" class="form-control" name="idAdmin" value="<?php echo $panitia->email;?>"  disabled>
										              </div> <br><br>
										      </div> 
										      <div class="form-group">
										              <label class="col-sm-4 text-right" style="margin-top:1.5%;"> Alamat :</label>
										              <div class="col-sm-8">
										               	<input type="text" class="form-control" name="idAdmin" value="<?php echo $panitia->alamat;?>"  disabled>
										              </div> <br><br>
										      </div>

		                                </form>
		                            </div>
		                        </div>
		                    </div>
							<div class="col-md-4">
	    						<div class="card card-profile">
	    							<div class="card-avatar">
	    								<a href="#pablo">
	    									<img class="img" src="<?php echo base_url('assets/img/panitia/'.$panitia->foto.'');?>" />
	    								</a>
	    							</div>

	    							<div class="content">
	    								<h6 class="category text-gray"></h6>
	    								<h4 class="card-title"></h4>
	    								<p class="card-content">
	    									<?php echo "Tempat:<br>".$panitia->deskrip;?>
	    								</p>
	    								
	    							</div>
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
