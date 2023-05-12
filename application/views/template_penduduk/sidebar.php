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
						<a href="<?php echo base_url('penduduk/dashboard')?>">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class="badge badge-count">5</span>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
						</li>
						<li class="nav-item">
						<a href="<?php echo base_url('penduduk/tambahpengaduan')?>">
											<span class="sub-item">Tambah Pengaduan</span>
							<div class="collapse" id="charts">

							<ul class="nav nav-collapse">
							<a href="components/avatars.html">
							<li>
									</li>
								</ul>
							</div>
						</li>
					
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Proses Bar</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo base_url('penduduk/tracking')?>">
											<span class="sub-item">tracking</span>
										<a href="<?php echo base_url('penduduk/gantipassword')?>">
											<span class="sub-item">Ganti Password</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

	