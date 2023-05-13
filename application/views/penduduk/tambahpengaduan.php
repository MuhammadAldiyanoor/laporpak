<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Azzara Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url("");?>assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?= base_url();?>assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/azzara.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url();?>assets/css/demo.css">
</head>
<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<!-- end topbar -->
                    
					<div class="card">
					<h1 class="card-header">Tambah Pengaduan</h1>
	<div class="card-body">
	<form action="<?php echo base_url('landing/tambah_data_aksi')?>" method="POST">
	<div class="form-group">
		<label for="exampleInputEmail1">Nama</label>
		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama" name="nama">
	</div>
    <div class="form-group">
		<label for="exampleInputEmail1">NIK</label>
		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan NIK" name="nik">
	</div>
    <div class="form-group">
		<label for="exampleInputEmail1">Alamat Pelapor</label>
		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Alamat" name="alamat_pelapor">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">RT/RW</label>
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan RT/RW" name="id_rw">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Tanggal Pengaduan</label>
		<input type="date" class="form-control" id="exampleInputPassword1" placeholder="Masukan Tanggal" name="tanggal">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Lokasi</label>
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Lokasi" name="lokasi">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Jenis Pengaduan</label>
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Pilih" name="jenis_pengaduan">
	</div>
	<div class="form-check">
		<input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <h4>Isi Laporan</h4>
					<textarea name="isi_laporan" id="" cols="190" rows="10"></textarea>
					<div class="form-group">
						<label for="exampleInputEmail1">Upload Foto</label>
						<div class="input-group mb-3">
							<input type="file" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" name="foto">
		<div class="input-group-append">
			<span class="input-group-text" id="basic-addon2">Browse</span>
		</div>
	</div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
	</div>
	</div>

<!--   Core JS Files   -->
<script src="<?= base_url();?>assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url();?>assets/js/core/popper.min.js"></script>
<script src="<?= base_url();?>assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="<?= base_url();?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url();?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url();?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="<?= base_url();?>assets/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="<?= base_url();?>assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?= base_url();?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?= base_url();?>assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url();?>assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?= base_url();?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="<?= base_url();?>assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?= base_url();?>assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url();?>assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="<?= base_url();?>assets/js/plugin/gmaps/gmaps.js"></script>

<!-- Sweet Alert -->
<script src="<?= base_url();?>assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="<?= base_url();?>assets/js/ready.min.js"></script>

<!-- Azzara DEMO methods, don't include it in your project! -->
<script src="<?= base_url();?>assets/js/setting-demo.js"></script>
<script src="<?= base_url();?>assets/js/demo.js"></script>
</body>
</html>