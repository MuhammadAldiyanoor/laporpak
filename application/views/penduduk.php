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
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Pekerjaan</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($pengaduan as $p) :?>
            <tr>
                <td><?php $no++ ?></td>
                <td><?php echo $p->id_kategori ?></td>
                <td><?php echo $p->nik ?></td>
                <td><?php echo $p->alamat_pelapor ?></td>
                <td><?php echo $p->tanggal ?></td>
                <td><?php echo $p->lokasi ?></td>
                <td><?php echo $p->isi_laporan ?></td>
                <td><?php echo $p->foto ?></td>
                <td></td>
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
		<a href="<?php echo base_url('rt/tambahrt')?>"
         href="#" class="btn btn-primary">Tambah</a>
         <a href="<?php echo base_url('')?>"><button class="btn btn-danger btn-"><i
                                class="fa fa-arrow">
                            </i>Kembali</button></a>
	</div>
</div>