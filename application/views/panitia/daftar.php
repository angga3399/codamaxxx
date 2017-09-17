<div class="wrapper">

		<div class="main main-raised" style="margin-top:5%">
				<div class="section section-basic">
			    	<div class="container">
				            <div class="title">
				           		<center><h3>Tambah Daftar Acara </h3></center>
				            </div>
					            	<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>panitia/daftar">
					            <div class="col-sm-12" >
					            	<div class="col-sm-5">
					            		<div class="form-group label-floating">
											<label class="control-label">Nama Acara</label>
											<input type="text" name="nama" class="form-control">
										</div>
										<div class="form-group label-statis">
											<label class="control-label">Tanggal Acara</label>
											<select name="tgl" type="checkbox" class="form-control">
												<option value="<?php  echo date('Y-m-d', strtotime('sunday'));?>">
													<?php  echo date('d F Y', strtotime('sunday'));?>
												</option>
												<option value="<?php  echo date('Y-m-d', strtotime('+2 sunday'));?>">
													<?php  echo date('d F Y', strtotime('+2 sunday'));?>
												</option>
												<option value="<?php  echo date('Y-m-d', strtotime('+3 sunday'));?>">
													<?php  echo date('d F Y', strtotime('+3 sunday'));?>
												</option>
												<option value="<?php  echo date('Y-m-d', strtotime('+4 sunday'));?>">
													<?php  echo date('d F Y', strtotime('+4 sunday'));?>
												</option>
											</select>
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Deskripsi</label>
											<textarea name="desk" class="form-control" rows="5"> </textarea>
										</div>
										
					            	</div>

					            	<div class="col-sm-1">
					            	</div>

					            	<div class="col-sm-6">
					            	<div class="form-group label-floating">
                                                Pamflet
                                                <div class="fileupload">
                                                    <input onchange="document.getElementById('image-preview').src=window.URL.createObjectURL(this.files[0])" accept="image/jpeg,image/png" type="file" title="Click untuk Foto" name="foto" />
                                                    <img width="150px" height="150px" src='<?php echo base_url(); ?>assets/img/camera.png' id='image-preview' alt='your foto' class='img-responsive'>
                                                </div>
										</div>
									</div>

								</div>
								<div class="col-sm-12">
									<div class="col-sm-5">
										<div class="form-group">
											<input type="submit" value="Simpan" class="btn btn-primary">
										</div>
									</div>
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