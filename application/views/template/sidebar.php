	<!-- Sidebar -->
	<div class="sidebar">
			
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?= base_url();?>assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Muhammad Aldiyanoor
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
						<a href="<?php echo base_url('admin/dashboard')?>">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class="badge badge-count">5</span>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#dames">
							<i class="fas fa-layer-group"></i>
								<p>Data Master</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="dames">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo base_url('admin/penduduk')?>">
											<span class="sub-item">Penduduk</span>
										</a>
									</li>
									<li>
									<a href="<?php echo base_url('admin/rt')?>">
											<span class="sub-item">RT/RW</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						
							<!-- <div class="collapse" id="charts"> -->
					
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-file"></i>
								<p>Pengaduan</p>
								<span class="caret"></span>
							</a>
							
							<div class="collapse" id="base">

							<ul class="nav nav-collapse">
							
							<li>
							<a href="<?php echo base_url('admin/pengaduanmasuk')?>">
											<span class="sub-item">Pengaduan Masuk</span>
										</a>
									</li>
									<li>
									<a href="<?php echo base_url('admin/pengaduanproses')?>">
											<span class="sub-item">Pengaduan Proses</span>
										</a>
									</li>
									<li>
									<a href="<?php echo base_url('admin/pengaduanditolak')?>">
											<span class="sub-item">Pengaduan Ditolak</span>
										</a>
									</li>
									<li>
									<a href="<?php echo base_url('admin/pengaduanselesai')?>">
											<span class="sub-item">Pengaduan Selesai</span>
										</a>
									</li>
									
									<li>
									<a href="<?php echo base_url('admin/tambahuser')?>">
											<span class="sub-item">Tambah User</span>
										</a>
									</li>
									<!-- <li>
										<a href="components/sweetalert.html">
											<span class="sub-item">Sweet Alert</span>
										</a>
									</li>
									<li>
										<a href="components/font-awesome-icons.html">
											<span class="sub-item">Font Awesome Icons</span>
										</a>
									</li>
									<li>
										<a href="components/flaticons.html">
											<span class="sub-item">Flaticons</span>
										</a>
									</li>
									<li>
										<a href="components/typography.html">
											<span class="sub-item">Typography</span>
										</a> -->
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Profil</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo base_url('admin/profil')?>">
											<span class="sub-item">Profil</span>
										</a>
									</li>
									<li>
									<a href="<?php echo base_url('admin/gantipassword')?>">
											<span class="sub-item">Ganti Password</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url('admin/generatelaporan')?>">
								<i class="fas fa-table"></i>
								<p>Hasil Laporan</p>
								<span class="caret"></span>
							</a>
							<!-- <div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="tables/tables.html">
											<span class="sub-item">Basic Table</span>
										</a>
									</li>
									<li>
										<a href="tables/datatables.html">
											<span class="sub-item">Datatables</span>
										</a>
									</li>
								</ul>
							</div> -->
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url('admin/tambahuser')?>">
								<i class="fas fa-user"></i>
								<p>Tambah User</p>
								<span class="caret"></span>
							</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url('admin/logout')?>">
								<i class="fas fa-map-marker-alt"></i>
								<p>Log Out</p>
								<span class="caret"></span>
							</a>
							<!-- <div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li>
										<a href="maps/googlemaps.html">
											<span class="sub-item">Google Maps</span>
										</a>
									</li>
									<li>
										<a href="maps/fullscreenmaps.html">
											<span class="sub-item">Full Screen Maps</span>
										</a>
									</li>
									<li>
										<a href="maps/jqvmap.html">
											<span class="sub-item">JQVMap</span>
										</a>
									</li>
								</ul>
							</div> -->
							<!-- <div class="collapse" id="charts">
								<ul class="nav nav-collapse">
									<li>
										<a href="charts/charts.html">
											<span class="sub-item">Chart Js</span>
										</a>
									</li>
									<li>
										<a href="charts/sparkline.html">
											<span class="sub-item">Sparkline</span>
										</a>
									</li>
								</ul>
							</div> -->
						</li>
						
						<!-- <li class="nav-item">
							<a href="widgets.html">
								<i class="fas fa-desktop"></i>
								<p>Widgets</p>
								<span class="badge badge-count badge-success">4</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#custompages">
								<i class="fas fa-paint-roller"></i>
								<p>Custom Pages</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="custompages">
								<ul class="nav nav-collapse">
									<li>
										<a href="login.html">
											<span class="sub-item">Login & Register 1</span>
										</a>
									</li>
									<li>
										<a href="login2.html">
											<span class="sub-item">Login & Register 2</span>
										</a>
									</li>
									<li>
										<a href="userprofile.html">
											<span class="sub-item">User Profile</span>
										</a>
									</li>
									<li>
										<a href="404.html">
											<span class="sub-item">404</span>
										</a>
									</li>
								</ul>
							</div>
						</li> -->
						<!-- <li class="nav-item">
							<a data-toggle="collapse" href="#submenu">
								<i class="fas fa-bars"></i>
								<p>Menu Levels</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="submenu">
								<ul class="nav nav-collapse">
									<li>
										<a data-toggle="collapse" href="#subnav1">
											<span class="sub-item">Level 1</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="subnav1">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="#">
														<span class="sub-item">Level 2</span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="sub-item">Level 2</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a data-toggle="collapse" href="#subnav2">
											<span class="sub-item">Level 1</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="subnav2">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="#">
														<span class="sub-item">Level 2</span>
													</a>
												</li>
											</ul>
										</div>
									</li> -->
									<!-- <li>
										<a href="#">
											<span class="sub-item">Level 1</span>
										</a>
									</li>
								</ul>
							</div>
						</li> -->
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Topbar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeMainHeaderColor" data-color="blue"></button>
							<button type="button" class="changeMainHeaderColor" data-color="purple"></button>
							<button type="button" class="changeMainHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeMainHeaderColor" data-color="green"></button>
							<button type="button" class="changeMainHeaderColor" data-color="orange"></button>
							<button type="button" class="changeMainHeaderColor" data-color="red"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->

	