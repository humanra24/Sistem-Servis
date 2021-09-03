<div class="row mt-1">
	<div class="col-md-3"></div>
	<div class="col-md-6">

		<div class="container">


			<div class="card">
				<div class="card-header">
					<a href="<?= base_url(); ?>servis" style="font-size: 20px;"><i class="fas fa-arrow-left"></i></a>
					&nbsp;
					<span style="font-size: 20px;">
						<?= $judul; ?>
					</span>

				</div>
				<div class="card-body">
					<form action="<?= base_url(); ?>servis/ubahAll" method="post">

						<input type="hidden" name="id" id="id" value="<?= $servis['idS']; ?>">

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="tgl">Tanggal</label>
							<div class="col-sm-5">
								<input type="text" id="tgl" readonly class="form-control" name="tgl"
									value="<?= $servis['tgl_masuk']; ?>">
							</div>

							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="servis">Id Servis</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" readonly name="id servis"
									value="<?= $servis['kodeS'].$servis['idS']; ?>">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="pelanggan">Id Pelanggan</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" readonly name="id Pelanggan"
									value="<?= $servis['kodeP'].$servis['idP']; ?>">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="jenis">Jenis Barang</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="jns" value="<?= $servis['jns'];?>">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="merk">Merk</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="merk" value="<?= $servis['merk'];?>"
									name="merk">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="model">Model/Seri</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="seri" value="<?= $servis['seri'];?>">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="kerusakan">Kerusakan</label>
							<div class="col-sm-8">
								<?php foreach ($rusak as $rusak1) :?>
								<?= $rusak1['kerusakan']; ?>
								<br>
								<?php endforeach; ?>
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<button type="submit" class="btn btn-success float-right"><span
								style="font-size: 15px; color: white;"> <i class="fas fa-plus"> ubah </i>
							</span></button>

					</form>
				</div>
			</div>

		</div>
	</div>
</div>
