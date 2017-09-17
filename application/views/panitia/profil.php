<div class="wrapper">

		<div class="main main-raised" style="margin-top:5%">
				<div class="section section-basic">
			    	<div class="container">
				            <div class="title">
				           		<center><h3>Profil Panitia</h3></center>
				            </div>
					            <div class="col-sm-12" >
					            	<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>panitia/profil/<?php echo $panitia->password; ?>">
					            		<div class="col-sm-5">
						            		<div class="form-group label-floating">
												<label class="control-label">No. KTP</label>
												<input type="text" name="no_ktp" class="form-control">
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Nama Panitia</label>
												<input type="text" name="nama" class="form-control">
											</div>
											<div class="form-group label-statis">
												<label class="control-label">Tanggal lahir</label>
												<input type="text" name="tgl" class="datepicker form-control" placeholder="hh/bb/tttt">
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Alamat</label>
												<textarea name="alamat" class="form-control" rows="2"> </textarea>
											</div>
											<div class="form-group label-floating">
												<label class="control-label">Kontak</label>
												<input type="text" name="kontak" class="form-control">
											</div>
											<div class="form-group label-statis">
												<label class="control-label">email</label>
												<input type="text" name="email" class="form-control" value="<?php echo $panitia->email; ?>">
											</div>
											<br>
											<div class="form-group">
											<input type="submit" value="Simpan" class="btn btn-primary">
											</div>
					            		</div>

					            	<div class="col-sm-1">
					            	</div>


					            	<div class="col-sm-6">
					   					
										<div class="form-group label-floating">
												<label class="control-label">Password baru</label>
												<input type="password" name="pass" class="form-control">
										</div>
										<div class="form-group label-floating">
												<label class="control-label">Konfirmasi Password</label>
												<input type="password" name="konf_pass" class="form-control">
										</div>
										<div class="form-group label-floating">
                                                FOTO
                                                <div class="fileupload">
                                                    <input onchange="document.getElementById('image-preview').src=window.URL.createObjectURL(this.files[0])" accept="image/jpeg,image/png" type="file" title="Click untuk Foto" name="foto" />
                                                    <img width="150px" height="150px" src='<?php echo base_url(); ?>assets/img/camera.png' id='image-preview' alt='your foto' class='img-responsive'>
                                                </div>
										</div>
									</div>
									</form>

								</div>
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
