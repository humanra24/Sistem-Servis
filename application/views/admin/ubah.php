<div class="row mt-1">
	<div class="col-md-3"></div>
	<div class="col-md-6">

		<div class="container">


			<div class="card">
				<div class="card-header">
					<span style="font-size: 20px;">
						<?= $judul; ?>
					</span>

				</div>
				<div class="card-body">
					<form action="<?= base_url(); ?>admin/ubahan" method="post">

						<input type="hidden" name="id" id="id" value="<?= $admin['id']; ?>">

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="Nama">Nama</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="nama" value="<?= $admin['nama']; ?>">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="jenis">Email</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" name="email" value="<?= $admin['email']; ?>">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="telp">Telephone(WA)</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="telp" value="<?= $admin['telp']; ?>">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="alamat">Alamat</label>
							<div class="col-sm-8">
								<textarea name="alamat" id="alamat" class="form-control"
									rows="2"><?= $admin['alamat']; ?></textarea>
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<!-- Button trigger modal -->
						<a href="" data-toggle="modal" data-target="#exampleModal">
							ubah password
						</a>

						<button type="submit" class="btn btn-success float-right"><span
								style="font-size: 15px; color: white;"> <i class="fas fa-edit"> Ubah </i>
							</span></button>

					</form>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url(); ?>admin/ubahPass" method="post">
                <input type="hidden" class="form-control" id="recipient-name" name="id" value="1">
					<div class="form-group">
						<label for="pass" class="col-form-label">Password Baru</label>
						<input type="text" class="form-control" id="recipient-name" name="pass">
					</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-primary">Ubah</button>
			</div>
            </form>
		</div>
	</div>
</div>
