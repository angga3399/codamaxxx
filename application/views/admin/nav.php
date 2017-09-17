<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="<?php echo base_url('assets/admin/img/sidebar-1.jpg');?>">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="" class="simple-text">
					Admin CFD
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li>
	                    <a href="<?php echo base_url('admin/beranda');?>">
	                        <i class="material-icons">dashboard</i>
	                        <p>Beranda</p>
	                    </a>
	                </li>
	               	<li>
	                    <a href="<?php echo base_url('admin/kelolacfd');?>">
	                        <i class="material-icons">content_paste</i>
	                        <p>Kelola CFD</p>
	                    </a>
	                </li>
	               	<li>
	                    <a href="<?php echo base_url('admin/aktivasiacara');?>">
	                        <i class="material-icons">check_box</i>
	                        <p>Aktivasi Daftar Acara</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="<?php echo base_url('admin/kelolapanitia');?>">
	                        <i class="material-icons">person</i>
	                        <p>Kelola Panitia</p>
	                    </a>
	                </li>
	               	<li>
	                    <a href="<?php echo base_url('admin/kelolaadmin');?>">
	                        <i class="material-icons">person</i>
	                        <p>Kelola Admin</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>