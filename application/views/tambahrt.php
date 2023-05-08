<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<!-- end topbar -->
                    <h1>Tambah RT/RW</h1>
<form method="POST" action="<?php echo base_url('rt/tambah_data_aksi')?>">
	<div class="form-group">
		<label for="exampleInputEmail1">RT</label>
		<input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="Masukan RT"name="id_rt">
		<input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="Masukan RT"name="rt">
	</div>
    <div class="form-group">
		<label for="exampleInputEmail1">RW</label>
		<input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="Masukan RW"name="id_rw">
		<input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="Masukan RW"name="rw">
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
</form>