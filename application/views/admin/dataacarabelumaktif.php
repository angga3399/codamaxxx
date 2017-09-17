
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
						<div class="navbar-brand"> <a href="<?= base_url('admin/beranda');?>">Beranda </a> / Data Acara Belum Aktif </div>
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
	                                <h4 class="title">Data Car Free Day</h4>
	                                <p class="category">Tabel Car Free Day Kota Bandung</p>
	                            </div>
	                        	<div class="col-md-12">
	                      			<?php if($this->session->flashdata('info')):?>
				                        <br><div class="alert alert-success"> <a class="close" data-dismiss="alert" aria-label="close">×</a> <?php echo $this->session->flashdata('info'); ?>  
				                        </div>
				                    <?php endif;?>
				                   	<?php if($this->session->flashdata('salah')):?>
				                        <br><div class="alert alert-danger"> <a class="close" data-dismiss="alert" aria-label="close">×</a> <?php echo $this->session->flashdata('salah'); ?>  
				                        </div>
				                    <?php endif;?>
	                        		<table id="example" class="mdl-data-table" cellspacing="0" width="100%">
								        <thead>
								            <tr>
								                <th>ID </th>
								                <th>Nama Acara</th>
								                <th>Tempat</th>
								                <th>Tanggal</th>
								                <th>Status </th>
								                <th>Opsi</th>
								            </tr>
								        </thead>

								        <tbody>
								            <?php foreach ($data as $acara) {
								            	if ($acara->status=='Belum Aktif') {
								          	?>
								 			  
									            <tr>
									                <td><?= $acara->idEvent?></td>
									                <td><?= $acara->namaEvent?></td>
									                <td><?= $acara->namaCFD?></td>
									                <td><?= $acara->tgl?></td>
									                <td>
									                	<?php if ($acara->status=='Aktif') {
									                		 echo "<span class='new badge' style='background-color:#3ba1f9'> Aktif</span>";
									                	}else {
									                		echo "<span class='new badge' style='background-color:#f22e2e'> Belum Aktif</span>";
									                	}
									                	?>
									                </td>
									                <td> 
									                	 <a href="<?php echo base_url('admin/aktivasiacara/tampil/'.$acara->idEvent); ?>" style="color:#4286f4" rel="tooltip" title="Tampil"><i class="material-icons">pageview</i></a> &nbsp;
									                	 <a href="<?php echo base_url('admin/aktivasiacara/hapus/'.$acara->idEvent); ?>" style="color:red" rel="tooltip" title="Hapus"><i class="material-icons">delete</i></a> &nbsp;
									                </td>
									            </tr>
								            <?php } } ?>
								        </tbody>
								    </table>
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


