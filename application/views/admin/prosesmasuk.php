<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<!-- end topbar -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
<table id="example" class="table table-striped" style="width:100%">
<div class="card">
					<h1 class="card-header">pengaduan diproses</h1>
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
		<label for="exampleInputPassword1">Jenis Pengaduan</label>
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Pilih" name="jenis_pengaduan">
	</div>
    <div class="form-group">
		<label for="exampleInputPassword1">Nama Petugas</label>
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Petugas" name="nama_petugas">
	</div>
    <div class="form-group">
		<label for="exampleInputPassword1">Tanggal Diproses</label>
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Tanggal Diproses" name="tanggal_diproses">
	</div>
    <div class="form-group">
		<label for="exampleInputPassword1">Jam Dproses</label>
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Jam Diproses" name="jam_diproses">
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