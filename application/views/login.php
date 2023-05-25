<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo base_url('assets/img/icon.ico')?>" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?php echo base_url('assets/js/plugin/webfont/webfont.min.j')?>s"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['<?php echo base_url('')?>../assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/azzara.min.css')?>">
</head>
<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Sign In To Admin</h3>
			<form method="POST" action="<?php echo base_url('login/auth') ?>">
			<div class="login-form">
				<div class="form-group form-floating-label">
					<input id="username" name="username" type="text" class="form-control input-border-bottom" required>
					<label for="username" class="placeholder">Username</label>
				</div>
				<div class="form-group form-floating-label">
					<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
					<label for="password" class="placeholder">Password</label>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="rememberme">
						<label class="custom-control-label" for="rememberme">Remember Me</label>
					</div>
					
					<a href="#" class="link float-right">Forget Password ?</a>
				</div>
				<div class="form-action mb-3">
					<button type="submit" name="submit" class="btn btn-primary btn-rounded btn-login">Login</button>
				</div>
				<div class="login-account">
					<span class="msg"></span>
					<a href="#" id="show-signup" class="link">Daftar</a>
				</div>
			</div>
			</form>
		</div>

		<div class="container container-signup animated fadeIn" style="width: 100rem;height:65rem;">
			<h3 class="text-center">Sign Up</h3>
			<div class="card-body">
                
                <form action="penduduk/tambah_data_aksi" method="POST">

				<input  id="fullname" name="id_masyarakat" type="hidden" class="form-control input-square" required>
				<input  id="fullname" name="id_level" type="hidden" class="form-control input-square" value="3" required>	

                <div class="form-group">
                    <label for="fullname" class="placeholder">NIK</label>
					<input  id="fullname" name="nik" type="text" class="form-control input-square" required>
				</div>

                <div class="form-group">
					<label for="text" class="placeholder">Nama</label>
					<input  id="text" name="nama" type="text" class="form-control input-square" required>
				</div>

				<div class="form-group">
					<label for="text" class="placeholder">Tempat Lahir</label>
					<input  id="text" name="tempat_lahir" type="text" class="form-control input-square" required>
				</div>

				<div class="form-group">
					<label for="text" class="placeholder">Jenis Kelamin</label>
					<input  id="text" name="jenis_kelamin" type="text" class="form-control input-square" required>
				</div>

				<div class="form-group">
					<label for="text" class="placeholder">Alamat</label>
					<input  id="text" name="alamat" type="text" class="form-control input-square" required>
				</div>

				<div class="form-group">
					<label for="text" class="placeholder">Agama</label>
					<input  id="text" name="agama" type="text" class="form-control input-square" required>
				</div>

				<div class="form-group">
					<label for="text" class="placeholder">Pekerjaan</label>
					<input  id="text" name="pekerjaan" type="text" class="form-control input-square" required>
				</div>

				<div class="form-group">
					<label for="passwordsignin" class="placeholder">Username</label>
					<input  id="passwordsignin" name="username" type="text" class="form-control input-square" required>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>

				<div class="form-group">
					<label for="confirmpassword" class="placeholder">Password</label>
					<input  id="confirmpassword" name="password" type="password" class="form-control input-square" required>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>

																				
				</div>
								<div class="card-action" style="margin-left:29rem;">
									<button type="submit" class="btn btn-success">Submit</button>
									<button class="btn btn-danger">Cancel</button>
								</div>
                                </form>
							</div>
		</div>
	</div>
	<script src="<?php echo base_url('assets/js/core/jquery.3.2.1.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/core/popper.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/core/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/ready.js')?>"></script>
</body>
</html>