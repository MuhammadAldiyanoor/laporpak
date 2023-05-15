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
<table class="table table-bordered table-head-bg-info table-bordered-bd-info">
	<thead>
		<tr>
			<th class="text-center">No</th>
			<th class="text-center">Nama</th>
			<th class="text-center">NIK</th>
			<th class="text-center">RT/RW</th>
			<th class="text-center">Tanggal Pengaduan</th>
			<th class="text-center">Lokasi</th>
			<th class="text-center">Jenis Pengaduan</th>
			<th class="text-center">Isi Laporan</th>
			<th class="text-center">foto</th>
			<th class="text-center">Aksi</th>

		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Mark</td>
			<td>Otto</td>
			<td>@mdo</td>
			<td>1</td>
			<td>Mark</td>
			<td>Otto</td>
			<td>@mdo</td>
			<td>1</td>
			<td><a href="<?php echo base_url('penduduk')?>"><button
                                                    class="btn btn-primary btn-xs"><i class="fa fa-eye"> Diproses
                                                    </i></button>
                <a href="<?php echo base_url('lihatdetailmasuk')?>"><button
                                                    class="btn btn-primary btn-xs"><i class="fa fa-eye"> Ditolak
                                                    </i></button></td>
		
		</tr>
		<tr>
			<td>2</td>
			<td>Jacob</td>
			<td>Thornton</td>
			<td>@fat</td>
			<td>2</td>
			<td>Jacob</td>
			<td>Thornton</td>
			<td>@fat</td>
			<td>2</td>
			<td><a href="<?php echo base_url('admin/prosesmasuk')?>"><button
                                                    class="btn btn-primary btn-xs"><i class="fa fa-eye"> Diproses
                                                    </i></button>
                <a href="<?php echo base_url('lihatdetailmasuk')?>"><button
                                                    class="btn btn-primary btn-xs"><i class="fa fa-eye"> Ditolak
                                                    </i></button></td>
		
		</tr>
		<tr>
			<td>3</td>
			<td>Larry the Bird</td>
			<td>@twitter</td>
			<td>3</td>
			<td>Larry the Bird</td>
			<td>@twitter</td>
			<td>3</td>
			<td>Larry the Bird</td>
			<td>@twitter</td>
			<td><a href="<?php echo base_url('admin/prosesmasuk')?>"><button
                                                    class="btn btn-primary btn-xs"><i class="fa fa-eye"> Diproses
                                                    </i></button>
                <a href="<?php echo base_url('lihatdetailmasuk')?>"><button
                                                    class="btn btn-primary btn-xs"><i class="fa fa-eye"> Ditolak
                                                    </i></button></td>
			
		</tr>
	</tbody>
</table>