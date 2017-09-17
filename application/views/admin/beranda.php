
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
						<a class="navbar-brand" href="#">Beranda </a>
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
						<div class="col-lg-3 col-md-6 col-sm-6">

							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
									<i class="material-icons">content_copy</i>
								</div>
								<div class="card-content">
									<p class="category">Data CFD</p>
									<h3 class="title">49/50<small>GB</small></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i> <a href="<?=base_url('admin/kelolacfd');?>">Lihat Data Lengkap...</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">store</i>
								</div>
								<div class="card-content">
									<p class="category">Data Acara Keseluruhan</p>
									<h3 class="title">$34,245</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i> <a href="<?=base_url('admin/aktivasiacara');?>">Lihat Data Lengkap...</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" style="background-color:#b551f7">
									<i class="material-icons">person</i>
								</div>
								<div class="card-content">
									<p class="category">Data Panitia</p>
									<h3 class="title">49/50<small>GB</small></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i> <a href="<?=base_url('admin/kelolapanitia');?>">Lihat Data Lengkap...</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" style="background-color:#ebf750">
									<i class="material-icons">person</i>
								</div>
								<div class="card-content">
									<p class="category">Data Admin</p>
									<h3 class="title">49/50<small>GB</small></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i> <a href="<?=base_url('admin/kelolaadmin');?>">Lihat Data Lengkap...</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="material-icons">check_box</i>
								</div>
								<div class="card-content">
									<p class="category">Data Acara Aktif</p>
									<h3 class="title">+245</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i> <a href="<?=base_url('admin/beranda/dataacaraaktif');?>">Lihat Data Lengkap...</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<i class="material-icons">info_outline</i>
								</div>
								<div class="card-content">
									<p class="category">Data Acara Belum Aktif</p>
									<h3 class="title">75</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i> <a href="<?=base_url('admin/beranda/dataacarabelumaktif');?>">Lihat Data Lengkap...</a>
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
