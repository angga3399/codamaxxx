<br>
<div class="section section-full-screen section-signup" style="background-image: url('<?php echo base_url();?>assets/img/city.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
			<div class="container">
				<div class="row">
						<div class="card card-signup">
								<div class="header header-primary text-center">
									<h4>List Panitia</h4>
									
								</div>
								
								<div class="content">
									<table id="example" class="table table-striped table-bordered table-condensed " cellspacing="0" width="85%">
   										<thead>
								            <tr class="danger">
								                <th>No</th>
								                <th>CFD</th>
								                <th>Panitia</th>
								                <th>Kontak</th>
								                <th>Email</th>
								            </tr>
								        </thead>
								        <tbody>
								            <?php $no=1; foreach ($panitia as $p): ?>
								            
								            <tr>
								                <td><?php echo $no++?></td>
								                <td><?php echo $p->namaCFD ?></td>
								                <td><?php echo $p->namaPanitia ?></td>
								                <td><?php echo $p->kontak ?></td>
								                <td><?php echo $p->email ?></td>
								                
								            </tr>
								            <?php endforeach?>
								        </tbody>
								    </table>
								</div>
								<div class="footer text-center">
									<br>
									<br>
								</div>
							
						</div>
				</div>
			</div>
		</div>
