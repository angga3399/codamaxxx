
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
						<div class="navbar-brand"><a href="<?php echo base_url('admin/kelolaadmin');?>">Kelola Admin </a> / Ubah </div>
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
	                        <div class="card card-nav-tabs">

								<div class="card-header" style="background-color:darkblue">
								<h4 class="title">Ubah Data Admin</h4>
								<hr>
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title">Ubah:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#akun" data-toggle="tab">
														<i class="material-icons">person</i>
														Akun
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#katasandi" data-toggle="tab">
														<i class="material-icons">lock</i>
														Kata Sandi
													<div class="ripple-container"></div></a>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="card-content">
									<div class="tab-content">
										<div class="tab-pane active" id="akun">
										        <form action="" method="post" enctype="multipart/form-data">	        
										       		<?php if($this->session->flashdata('kesalahanakun')):?>
								                        <br><div class="alert alert-danger"> <a class="close" data-dismiss="alert" aria-label="close">×</a> <?php echo $this->session->flashdata('kesalahanakun'); ?>  
								                        </div>
								                    <?php endif;?> 

								                    <?php if($this->session->flashdata('kesalahankatasandi')):?>
								                        <br><div class="alert alert-danger"> <a class="close" data-dismiss="alert" aria-label="close">×</a> <?php echo $this->session->flashdata('kesalahankatasandi'); ?>  
								                        </div>
								                    <?php endif;?>    
								                      
										          <div class="form-group">
										              <label class="col-sm-3 text-right" style="margin-top:1%;"> Id Admin :</label>
										              <div class="col-sm-9">
										               <input type="text" class="form-control" name="idAdmin" value="<?php echo $admin->idAdmin;?>"  readonly>
										              </div> <br><br>
										          </div>    
										          <div class="form-group">
										              <label class=" col-sm-3 text-right" style="margin-top:1%;"> Nama :</label>
										              <div class="col-sm-9">
										                <input type="text" class="form-control" name="namaAdmin" value="<?php echo $admin->namaAdmin;?>"/>
										              </div> <br><br>
										          </div>
										          <div class="form-group">
										              <label class="col-sm-3 text-right" style="margin-top:1%;"> Email :</label>
										              <div class="col-sm-9">
										                <input type="email" class="form-control" name="email" value="<?php echo $admin->email;?>"/>
										              </div> <br><br>
										          </div>
										          <div class="form-group">
										              <label class="col-sm-3 text-right" style="margin-top:1%;" for="kontak"> Kata sandi Lama :</label>
										              <div class="col-sm-9">
										                <input type="password" class="form-control" name="katasandi"/>
										              </div> <br><br>
										          </div>
										           <div class="form-group" style="margin:15px 15px 0px 0px;">
										           	   <label class="col-sm-3 text-right" style="margin-top:5px;" for="kontak">&nbsp;</label>
										              <input type="submit" name="simpanakun" class="btn btn-danger btn-md" value="Simpan" />
										           </div>
										        </form>
										</div>
										<div class="tab-pane" id="katasandi">
												<form action="" method="post" enctype="multipart/form-data">	        										           
										          <div class="form-group">
										              <label class=" col-sm-3 text-right" style="margin-top:1%;"> Kata Sandi Lama :</label>
										              <div class="col-sm-9">
										              	<input type="hidden" name="idAdmin" value="<?php echo $admin->idAdmin;?>">
										                <input type="password" class="form-control" name="katasandilama"/>
										              </div> <br><br>
										          </div>
										          <div class="form-group">
										              <label class="col-sm-3 text-right" style="margin-top:1%;"> Kata Sandi Baru :</label>
										              <div class="col-sm-9">
										               	<input type="password" class="form-control" name="katasandi" />
										              </div> <br><br>
										          </div>
										          <div class="form-group">
										              <label class="col-sm-3 text-right" style="margin-top:1%;"> Verifikasi Kata Sandi Baru:</label>
										              <div class="col-sm-9">
										                <input type="password" class="form-control" name="verkatasandi"/>
										              </div> <br><br>
										          </div>
										           <div class="form-group" style="margin:15px 15px 0px 0px;">
										           	   <label class="col-sm-3 text-right" style="margin-top:5px;" for="kontak">&nbsp;</label>
										              <input type="submit" name="simpankatasandi" class="btn btn-danger btn-md" value="Simpan" />
										           </div>
										        </form>
										</div>
										
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
