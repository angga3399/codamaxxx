</body>	
	<!--   Core JS Files   -->
	<script src="<?php echo base_url('assets/admin/js/jquery-3.1.0.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/admin/js/bootstrap.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/admin/js/material.min.js');?>" type="text/javascript"></script>

	<!--  Charts Plugin -->

	<!--  Notifications Plugin    -->
	<script src="<?php echo base_url('assets/admin/js/bootstrap-notify.js');?>"></script>

	

	<!-- Material Dashboard javascript methods -->
	<script src="<?php echo base_url('assets/admin/js/material-dashboard.js');?>"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url('assets/admin/js/demo.js');?>"></script>

	<!-- <script src="http://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script> -->
	<script src="<?php echo base_url('assets/admin/js/jquery.dataTables.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/admin/js/dataTables.material.min.js');?>" type="text/javascript"></script>
	
	

	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable( {
		        columnDefs: [
		            {
		                targets: [ 0, 1, 2 ],
		                className: 'mdl-data-table__cell--non-numeric'
		            }
		        ]
		    } );
		} );
	</script>
