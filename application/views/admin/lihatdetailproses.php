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
        <thead>
            <tr>
                <th>Name Pelapor</th>
                <th>Isi Laporan</th>
                <th>Telp</th>
                <th>Tanggal Pengaduan</th>
                <th>Nama Petugas</th>
                <th>tanggal diproses</th>
                <th>jam diproses</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td></td>
                <td></td>
                <td></td>
                <td>2011-04-25</td>
                <td><a href="<?php echo base_url('admin/pengaduanselesai')?>"><button
                                                    class="btn btn-primary btn-xs"><i class="fa fa-eye"> Selesai
                                                    </i></button></td>
            </tr>
           
    </table>

    <script>
        $(document).ready(function () {
        $('#example').DataTable();
    });
    </script>
		<a href="<?php echo base_url('admin/lihatdetailproses')?>"
         href="#" class="btn btn-warning">Lihat Detail</a>
		 <a href="<?php echo base_url('pengaduanproses')?>"><button class="btn btn-danger btn-"><i
                                class="fa fa-arrow-circle-left">
                            </i> Back</button></a>
	</div>
</div>