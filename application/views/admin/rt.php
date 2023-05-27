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
                <th>RT</th>
                <th>RW</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>03</td>
                <td>05</td>
            
            </tr>
           
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