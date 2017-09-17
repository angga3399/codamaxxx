<div class="wrapper">
	
		<div class="main main-raised" style="margin-top:5%">
				<div class="section section-basic">
			    	<div class="container">
				            <div class="title">
				           		<!-- Don't Delete -->
				            </div>
					            <div class="col-sm-4 col-md-4" >

								    <div class="col-sm-99" style="border:0px;">
								      <div class="panel panel-success">
								        <div class="panel-heading"><?php echo $panitia->namaPanitia ?></div>
								        <center>
								        <div class="panel-body"><img src="<?php echo base_url(); ?>assets/img/panitia/<?php echo $panitia->foto ?>" class="img-responsive" alt="Image"></div>
								      	</center>
								      </div>
								    </div>

								    <div class="col-sm-99" style="border:0px;">
								      <div class="panel panel-success">
								       <div class="panel-heading" >Profil User</div>
								       <div class="panel-body">
								         <table class="col-sm-12">
								          <th class="col-sm-12" style="border-bottom:1px solid #00A1F1; float:left;"><font size="2"> KTP  </font></th>
								            <tr class="col-sm-12">
								              <td style="float:right;"><?php echo $panitia->noKtp ?></td>
								            </tr>
								          <th class="col-sm-12" style="border-bottom:1px solid #00A1F1; float:left;"><font size="2"> Nama </font> </th>
								            <tr class="col-sm-12">
								              <td style="float:right;"><?php echo $panitia->namaPanitia ?></td>
								            </tr>
								           <th class="col-sm-12" style="border-bottom:1px solid #00A1F1; float:left;"><font size="2"> Alamat </font> </th>
								            <tr class="col-sm-12">
								              <td style="float:right;"><?php echo $panitia->alamat ?></td>
								            </tr>
								          <th class="col-sm-12" style="border-bottom:1px solid #00A1F1; float:left;"><font size="2"> Kontak HP  </font> </th>
								            <tr class="col-sm-12">
								              <td style="float:right;"><?php echo $panitia->kontak ?></td>
								            </tr>
								           <th class="col-sm-12" style="border-bottom:1px solid #00A1F1; float:left;"> <font size="2">Email</font></th>
								            <tr class="col-sm-12">
								              <td style="float:right;"><?php echo $panitia->email ?></td>
								            </tr>


								         </table>
								       </div>
								      </div>
								    </div>

								</div>
								
			                    <div class="col-lg-2 col-md-8">
				                    <div class="panel panel-primary">
				                        <div class="panel-heading">
				                            <div class="row">
				                                <div class="col-xs-3">
				                                    <i class="fa fa-list-alt fa-5x"></i>
				                                </div>
				                                <div class="col-xs-9 text-right">
				                                    <h3><?php echo $selectEvent ?></h3>
				                                </div>
				                            </div>
				                        </div>
				                        
				                            <div class="panel-footer">
				                                <font><b>Event -> <?php  echo date('d/m/Y', strtotime('sunday'));?></b></font>
				                                <div class="clearfix"></div>
				                            </div>
				                    </div>
			                    </div>
			                    <div class="col-lg-2 col-md-8">
				                    <div class="panel panel-primary">
				                        <div class="panel-heading">
				                            <div class="row">
				                                <div class="col-xs-3">
				                                    <i class="fa fa-list-alt fa-5x"></i>
				                                </div>
				                                <div class="col-xs-9 text-right">
				                                    <h3><?php echo $allEvent->num_rows() ?></h3>
				                                    
				                                </div>
				                            </div>
				                        </div>
				                            <div class="panel-footer">
				                                <font><b>Jumlah Event</b></font>
				                                <div class="clearfix"></div>
				                            </div>
				                    </div>
			                    </div>
			                    <div class="col-lg-2 col-md-8">
				                    <div class="panel panel-primary">
				                        <div class="panel-heading">
				                            <div class="row">
				                                <div class="col-xs-3">
				                                    <i class="fa fa-list-alt fa-5x"></i>
				                                </div>
				                                <div class="col-xs-9 text-right">
				                                    <h3><?php echo $eventKonf->num_rows();?></h3>
				                                    
				                                </div>
				                            </div>
				                        </div>
				                            <div class="panel-footer">
				                                <font><b>Event Terkonfirmasi</b></font>
				                                <div class="clearfix"></div>
				                            </div>
				                    </div>
			                    </div>
			                    <div class="col-lg-2 col-md-8">
				                    <div class="panel panel-primary">
				                        <div class="panel-heading">
				                            <div class="row">
				                                <div class="col-xs-3">
				                                    <i class="fa fa-list-alt fa-5x"></i>
				                                </div>
				                                <div class="col-xs-9 text-right">
				                                    <h3><?php echo $eventGagal ?></h3>
				                                </div>
				                            </div>
				                        </div>
				                        
				                            <div class="panel-footer">
				                                <font><b>Event di Tolak</b></font>
				                                <div class="clearfix"></div>
				                            </div>
				                    </div>
			                    </div>
			                    
							<div class="col-sm-8">
								<div class="card card-nav-tabs" style="margin-top:4%;">
									<div class="header header-success">
																	
									<h5 style="margin-left:2%">Alur Kinerja Panitia</h5>
								
										<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
										<div class="nav-tabs-navigation" style="margin-left:2%">
											<div class="nav-tabs-wrapper">
												<ul class="nav nav-tabs" data-tabs="tabs">
													<li class="active">
														<a href="#event" data-toggle="tab">
															<i class="material-icons">face</i>
															Event
														</a>
													</li>
													<li>
														<a href="#list" data-toggle="tab">
															<i class="material-icons">content_paste</i>
															List Event
														</a>
													</li>
													<li>
														<a href="#konfirmasi" data-toggle="tab">
															<i class="material-icons">check</i>
															Konfirmasi Event
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="content">
										<div class="tab-content">
											<div class="tab-pane active" id="event">
												<div class="form-group">
													<div class="col-sm-1">
														<h5> 1. </h5>
													</div>
													<div class="col-sm-11">
														<h5>Panitia mengunduh Surat Permohonan <a href="#" style="color:blue">disini </a></h5>
	 												</div>
												</div>
												<div class="form-group">
													<div class="col-sm-1">
														<h5> 2. </h5>
													</div>
													<div class="col-sm-11">
														<h5>Pilih menu <a href="#" style="color:blue"> + Daftar </a> pada Navbar. </h5>
	 												</div>
												</div>
												<div class="form-group">
													<div class="col-sm-1">
														<h5> 3. </h5>
													</div>
													<div class="col-sm-11">
														<h5>Masukan Data Acara Car Free Day </h5>
	 												</div>
												</div>
												<div class="form-group">
													<div class="col-sm-1">
														<h5> 4. </h5>
													</div>
													<div class="col-sm-11">
														<h5>Upload Foto Berupa Pamplete </h5>
	 												</div>
												</div>
												<div class="form-group">
													<div class="col-sm-1">
														<h5> 5. </h5>
													</div>
													<div class="col-sm-11">
														<h5>Simpan </h5>
	 												</div>
												</div>
												<div class="form-group">
													<div class="col-sm-1">
														<h5> 6. </h5>
													</div>
													<div class="col-sm-11">
														<h5>Tunggu Konfirmasi Acara </h5>
	 												</div>
												</div>
								
											</div>
											<div class="tab-pane" id="list">
												<div class="tab-pane active" id="profile">
													<h4 style="margin-left:2%"> Data List Acara </h4>
													<table id="example" class="table table-striped table-bordered table-condensed col-sm-11" >
				   										<thead>
												            <tr class="danger">
												                <th>No</th>
												                <th>Nama Acara</th>
												                <th>Tempat</th>
												                <th>Tanggal</th>
												                <th>Status</th>
												            </tr>
												        </thead>
												        <tbody>
												            <?php $no=1; foreach ($allEvent->result() as $p): ?>
												            
												            <tr>
												                <td><?php echo $no++?></td>
												                <td><?php echo $p->namaEvent ?></td>
												                <td><?php echo $p->namaCFD ?></td>
												                <td><?php echo date('d F Y', strtotime($p->tgl)) ?></td>
												                <td><?php echo $p->status ?></td>
												            </tr>
												            <?php endforeach?>
												        </tbody>
											    	</table>
									
												</div>
											</div>
											
											<div class="tab-pane" id="konfirmasi">
												<h4 style="margin-left:2%"> Data Konfirmasi Acara </h4>
												    <table id="example2" class="table table-striped table-bordered table-condensed col-sm-11" >
					   										<thead>
													            <tr class="danger">
													                <th>No</th>
													                <th>Nama Acara</th>
													                <th>Tempat</th>
													                <th>Tanggal</th>
													                <th>Waktu</th>
													                <th>Status</th>
													            </tr>
													        </thead>
													        <tbody>
													            <?php $no=1; foreach ($eventKonf->result() as $e): ?>
													            
													            <tr>
													                <td><?php echo $no++?></td>
												                	<td><?php echo $p->namaEvent ?></td>
												               		<td><?php echo $p->namaCFD ?></td>
												                	<td><?php echo date('d F Y', strtotime($p->tgl)) ?></td>
												                	<td><?php echo $p->status ?></td>
													            </tr>
													            <?php endforeach?>
													        </tbody>
													</table>
											</div>
											
										</div>
									</div>
								</div>
								<!-- End Tabs with icons on Card -->	
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