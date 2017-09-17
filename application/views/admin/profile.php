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
						<div class="navbar-brand"><a href="<?php echo base_url('admin/beranda');?>">Beranda </a> / Profil </div>
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
		                        <div class="col-md-12">
		                        <div class="card">
		                            <div class="card-header" data-background-color="purple">
		                                <h4 class="title">Selamat Datang</h4>
										<p class="category">Data Lengkap akun admin anda. </p>
		                            </div>
		                            <div class="card-content">
		                                Nama :<?=$person->namaAdmin;?> <br>
		                                email : <?=$person->email;?>
			                            <table id="example" class="mdl-data-table" cellspacing="0" width="100%">
									        <thead>
									            <tr>
									                <th>Nama </th>
									                <th>Email</th>
									            </tr>
									        </thead>

									        <tbody>
									              
										            <tr>
										                <td><?=$person->namaAdmin;?></td>
										                <td><?=$person->email;?></td>        
										            </tr>
									        </tbody>
									    </table>

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
