
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
						<div class="navbar-brand"><a href="<?php echo base_url('admin/activasiacara');?>">Aktivasi Daftar Acara </a> / Tampil </div>
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
								<h4 class="title">Tampil Data Aktivasi Acara</h4>
								<hr>
								<form action="<?php echo base_url('admin/aktivasiacara/konfirmasi')?>" method="POST">
									<input type="hidden" name="idEvent" value="<?php echo $event->idEvent;?>">
										<input type="submit" href="" class="btn btn-success btn-md" name="konfirmasi" value="Konfirmasi">&nbsp;
									    <input type="submit" href="" class="btn btn-danger btn-md" name="tolakkonfirmasi" value="Tolak Konfirmasi">
								</form>
								</div>

								<div class="card-content">
									<div class="tab-content">
									   <div class="col-sm-12" style="margin : 0% 0% 3% 0%">
											<img src="<?php echo base_url('assets/img/pamflet/'.$event->pamflet); ?>">
									    </div>
									    <div class="col-sm-12">
										          <div class="form-group">
										              <label class="col-sm-3 text-right" style="margin-top:1%;"> Id Acara :</label>
										              <div class="col-sm-9">
										               <input type="text" class="form-control"  value="<?php echo $event->idEvent;?>"  readonly>
										              </div> <br><br>
										          </div>    
										          <div class="form-group">
										              <label class=" col-sm-3 text-right" style="margin-top:1%;"> Nama Acara :</label>
										              <div class="col-sm-9">
										                <input type="text" class="form-control"  value="<?php echo $event->namaEvent;?>" readonly>
										              </div> <br><br>
										          </div>
										          <div class="form-group">
										              <label class="col-sm-3 text-right" style="margin-top:1%;"> Tempat :</label>
										              <div class="col-sm-9">
										                <input type="email" class="form-control" value="<?php echo $event->namaCFD;?>" readonly>
										              </div> <br><br>
										          </div>
										          <div class="form-group" style="margin-bottom:3%">
										              <label class="col-sm-3 text-right" style="margin-top:1%;" for="kontak"> Deskripsi:</label>
										              <div class="col-sm-9">
										                <textarea type="text" class="form-control" readonly> <?php echo $event->deskripEvent;?></textarea>
										              </div> <br><br>
										          </div>
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
