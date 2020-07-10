  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  	<!-- Left navbar links -->
  	<ul class="navbar-nav">
  		<li class="nav-item">
  			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
  		</li>
  	</ul>

  	<!-- Right navbar links -->
  	<ul class="navbar-nav ml-auto">
  		<li class="nav-item">
  			<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
  				<i class="fas fa-th-large"></i>
  			</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="#" data-target="#logout" data-toggle="modal">
  				<i class="fa fa-sign-out-alt"></i>
  			</a>
  		</li>
  	</ul>
  </nav>
  <!-- /.navbar -->

  <!-- Sidebar Container -->
  <aside class="main-sidebar sidebar-light-dark elevation-4">

  	<a href="#" class="brand-link">
  		<img src="<?= base_url('assets/admin/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  		<span class="brand-text font-weight-light">Admin</span>
  	</a>

  	<div class="sidebar">
  		<nav class="mt-2">
  			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  				<li class="nav-item has-treeview menu-open">
  					<a href="#" class="nav-link active">
  						<i class="nav-icon fas fa-tachometer-alt"></i>
  						<p>
  							Dashboard
  						</p>
  					</a>
  				</li>
  				<li class="nav-item">
  					<a href="<?= base_url('slider') ?>" class="nav-link">
  						<i class="nav-icon fas fa-th"></i>
  						<p>
  							Slider
  						</p>
  					</a>
  				</li>
  				<li class="nav-item has-treeview">
  					<a href="<?= base_url('members') ?>" class="nav-link">
  						<i class="nav-icon fa fa-address-card"></i>
  						<p>
  							Member
  						</p>
  					</a>
  				</li>
  				<li class="nav-item has-treeview">
  					<a href="<?= base_url('soal') ?>" class="nav-link">
  						<i class="nav-icon fas fa-copy"></i>
  						<p>
  							Soal
  						</p>
  					</a>
  				</li>
  				<li class="nav-item has-treeview">
  					<a href="<?= base_url('matrix') ?>" class="nav-link">
  						<i class="nav-icon fas fa-file"></i>
  						<p>
  							Nilai Matrik
  						</p>
  					</a>
  				</li>
  				<li class="nav-item has-treeview">
  					<a href="<?= base_url('templates') ?>" class="nav-link">
  						<i class="nav-icon fas fa-bookmark"></i>
  						<p>
  							Template CV
  						</p>
  					</a>
  				</li>
  				<li class="nav-item has-treeview">
  					<a href="<?= base_url('portofolio') ?>" class="nav-link">
  						<i class="nav-icon fa fa-desktop"></i>
  						<p>
  							Portofolio
  						</p>
  					</a>
  				</li>
  				<li class="nav-item has-treeview">
  					<a href="<?= base_url('berita') ?>" class="nav-link">
  						<i class="nav-icon fa fa-bullhorn"></i>
  						<p>
  							Berita
  						</p>
  					</a>
  				</li>
  				<li class="nav-item has-treeview">
  					<a href="<?= base_url('laporan') ?>" class="nav-link">
  						<i class="nav-icon fas fa-book"></i>
  						<p>
  							Laporan
  						</p>
  					</a>
  				</li>
  			</ul>
  		</nav>
  	</div>
  </aside>
  <!-- /.Sidebar Container -->
