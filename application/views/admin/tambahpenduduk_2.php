<div class="main-panel">
			<div class="content">
				<div class="page-inner">
<div class="card">
				<div class="card-header">
				    <div class="card-title">Tambah Data Penduduk</div>
				</div>

				<div class="card-body">
                
                <form action="tambah_data_aksi" method="POST">

				<input  id="fullname" name="id_masyarakat" type="hidden" class="form-control input-square" required>
                <input  id="text" name="id_level" type="hidden" class="form-control input-border-bottom" value="3" required>	

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
					<input  id="passwordsignin" name="username" type="text" class="form-control input-square" >
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>

				<div class="form-group">
					<label for="confirmpassword" class="placeholder">Password</label>
					<input  id="confirmpassword" name="password" type="password" class="form-control input-square" >
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>
														
				</div>
								<div class="card-action">
									<button type="submit" class="btn btn-success">Submit</button>
									<button type="submit" class="btn btn-danger">Cancel</button>
								</div>
                                </form>
							</div>
                            </div>
                            </div>
                            </div>