<div class="wrapper">

		<div class="main main-raised" style="margin-top:5%">
				<div class="section section-basic">
			    	<div class="container">
				            <div class="title">
				                <center><h2>Pengaturan Akun</h2> </center>
				            </div>
				            <form action="<?php echo base_url();?>panitia/pengaturan" method="POST" enctype="multipart/form-data">
					            <div class="col-sm-4 col-md-4" >
								      <div class="panel panel-primary">
								      <center>
								        <div class="form-group label-floating">
                                                <div class="fileupload">
                                                    <input onchange="document.getElementById('image-preview').src=window.URL.createObjectURL(this.files[0])" accept="image/jpeg,image/png" type="file" title="Click untuk Foto" name="foto" />
                                                    <img width="250px" height="250px" src="<?php echo base_url(); ?>assets/img/panitia/<?php echo $panitia->foto ?>" id='image-preview' alt='your foto' class='img-responsive'>
                                                </div>
										</div>
								      </center>
								        
										</div>
										<div class="form-group">
											<label class="col-sm-4 text-right" style="margin-top:5px;" for="nama"> &nbsp; </label>
											<input type="submit" class="btn btn-primary pull-left" value="Simpan">
								      </div>
								</div>
								
								<div class="col-sm-8">
								<div class="card card-nav-tabs" style="margin-top:4%;">
									<div class="header header-success">
																	
									<h5 style="margin-left:2%">Ubah Pengaturan Akun</h5>
								
										<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
										<div class="nav-tabs-navigation" style="margin-left:2%">
											<div class="nav-tabs-wrapper">
												<ul class="nav nav-tabs" data-tabs="tabs">
													<li class="active">
														<a href="#profile" data-toggle="tab">
															<i class="material-icons">face</i>
															Profile
														</a>
													</li>
													<li>
														<a href="#messages" data-toggle="tab">
															<i class="material-icons">lock</i>
															Kata Sandi
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="content">
										<div class="tab-content text-center">
											<div class="tab-pane active" id="profile">
										          <div class="form-group">
										              <label class="col-sm-2 text-right" style="margin-top:5px;" for="nama"> No.KTP  : </label>
										              <div class="col-sm-10">
										                <input type="text" class="form-control" name="noKtp" value="<?php echo $panitia->noKtp ?>" readonly/>
										              </div> <center> <p id="user"> </p> </center><br><br>
										          </div>
										          <div class="form-group">
										              <label class="col-sm-2 text-right" style="margin-top:5px;" for="nama"> Nama  : </label>
										              <div class="col-sm-10">
										                <input type="text" class="form-control" name="panitia_nama" value="<?php echo $panitia->namaPanitia ?>" required/>
										              </div> <center> <p id="user"> </p> </center><br><br>
										          </div>
										          <div class="form-group">
										              <label class="col-sm-2 text-right" style="margin-top:5px;" for="nama"> Tangal Lahir  : </label>
										              <div class="col-sm-10">
										               <input type="text" name="panitia_tgl" class="datepicker form-control" value="<?php echo date('d/m/Y',strtotime($panitia->tgl)) ?>" required>
										              </div> <center> <p id="user"> </p> </center><br><br>
										          </div>
										          <div class="form-group">
										              <label class="col-sm-2 text-right" style="margin-top:5px;" for="nama"> kontak Lahir  : </label>
										              <div class="col-sm-10">
										                <input type="text" class="form-control" name="panitia_kontak" value="<?php echo $panitia->kontak ?>" required/>
										              </div> <center> <p id="user"> </p> </center><br><br>
										          </div>
										          <div class="form-group">
										              <label class="col-sm-2 text-right" style="margin-top:5px;" for="nama"> Alamat  : </label>
										              <div class="col-sm-10">
										                <input type="text" class="form-control" name="panitia_alamat" value="<?php echo $panitia->alamat ?>" required/>
										              </div> <center> <p id="user"> </p> </center><br><br>
										          </div>
										          <div class="form-group">
										              <label class="col-sm-2 text-right" style="margin-top:5px;" for="nama"> Email  : </label>
										              <div class="col-sm-10">
										                <input type="text" class="form-control" name="panitia_email" value="<?php echo $panitia->email ?>" required/>
										              </div> <center> <p id="user"> </p> </center><br><br>
										          </div>

										          <div class="form-group">
										         	<label class="col-sm-2 text-right" style="margin-top:5px;" for="nama"> &nbsp; </label>
										          	<input type="submit" class="btn btn-primary pull-left" style="margin-left:2%"value="Simpan">
										          </div>
						
											</div>

									
											<div class="tab-pane" id="messages">
												   			<div class="form-group">
												              <label class="col-sm-3 text-right" style="margin-top:5px;" for="nama"> Kata Sandi Lama  : </label>
												              <div class="col-sm-9">
												                <input type="password" class="form-control" name="sandi_lama"/>
												              </div> <center> <p id="user"> </p> </center><br><br>
												          </div>
												          <div class="form-group">
												              <label class="col-sm-3 text-right" style="margin-top:5px;" for="nama"> Kata Sandi Baru  : </label>
												              <div class="col-sm-9">
												                <input type="password" class="form-control" name="sandi_baru"/>
												              </div> <center> <p id="user"> </p> </center><br><br>
												          </div>
												          <div class="form-group">
												              <label class="col-sm-3 text-right" style="margin-top:5px;" for="nama"> Varifikasi Kata Sandi Baru  : </label>
												              <div class="col-sm-9">
												                <input type="password" class="form-control" name="sandi_konf"/>
												              </div> <center> <p id="user"> </p> </center><br><br>
												          </div>

												          <div class="form-group">
												         	<label class="col-sm-3 text-right" style="margin-top:5px;" for="nama"> &nbsp; </label>
												          	<input type="submit" class="btn btn-primary pull-left" value="Simpan">
												          </div>
												   
											</div>
											
										</div>
									</div>
								</div>
								<!-- End Tabs with icons on Card -->	
								</div>

							</form>
				    </div>
				 </div>
			</div>
		
	    <footer class="footer">
		    <div class="container">
				<a href="#">
					&copy; Team Developer CFD 2017
				</a>
		    </div>
		</footer>
</div>