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
                <th class="text-center">NIK</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Tempat Lahir</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Agama</th>
                <th class="text-center">Pekerjaan</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($penduduk as $p) :?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $p->nik ?></td>
                <td><?php echo $p->nama ?></td>
                <td><?php echo $p->tempat_lahir ?></td>
                <td><?php echo $p->jenis_kelamin ?></td>
                <td><?php echo $p->alamat ?></td>
                <td><?php echo $p->agama ?></td>
                <td><?php echo $p->pekerjaan ?></td>
                <td><a href="<?php echo base_url('')?>"><button
                                                    class="btn btn-warning btn-xs"><i class="fa fa-eye"> Detail
                                                    </i></button></td>
            </tr>
        </tbody>
           <?php endforeach; ?>
    </table>

    <script>
        $(document).ready(function () {
        $('#example').DataTable();
    });
    </script>
		<a href="<?php echo base_url('penduduk/tambah_penduduk')?>"
         href="#" class="btn btn-primary">Tambah</a>
         <a href="<?php echo base_url('')?>"><button class="btn btn-danger btn-"><i
                                class="fa fa-arrow">
                            </i>Kembali</button></a>
	</div>
</div>