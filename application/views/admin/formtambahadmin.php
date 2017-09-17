
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
						<div class="navbar-brand"><a href="<?php echo base_url('admin/kelolaadmin');?>">Kelola Admin </a> / Tambah </div>
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
	                                <h4 class="title">Tambah Data Admin</h4>
	                                <p class="category">Lengkapi data admin berikut ini.</p>
	                            </div>

	                        	<div class="col-md-12">
	                        	  
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
													<label class="control-label">ID Admin</label>
													<input type="text" class="form-control" name="idAdmin" value="<?php echo $kodeunik; ?>" readonly>
												</div>
	                                        </div>
	                                    </div>	                        		
	                                    <div class="row">
	                                        <div class="col-md-8">
												<div class="form-group label-floating">
													<label class="control-label">Nama</label>
													<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama')?>">
												</div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-8">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input type="email" class="form-control" name="email" value="<?php echo set_value('email')?>" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-8">
												<div class="form-group label-floating">
													<label class="control-label">Kata Sandi</label>
													<input type="password" class="form-control" name="katasandi" value="<?php echo set_value('katasandi')?>">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-8">
												<div class="form-group label-floating">
													<label class="control-label">Verifikasi Kata Sandi</label>
													<input type="password" class="form-control" name="verkatasandi" value="<?php echo set_value('verkatasandi')?>">
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
